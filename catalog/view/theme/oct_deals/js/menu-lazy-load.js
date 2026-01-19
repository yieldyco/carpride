/**
 * Menu Lazy Loading System
 * Generates submenus dynamically on click to reduce initial DOM size
 */

(function() {
    'use strict';

    // Check if we're on mobile or desktop
    function isMobile() {
        return window.matchMedia("(max-width: 1199.98px)").matches;
    }

    // Get menu data from window object
    function getMenuData() {
        return window.octMenuData || [];
    }

    // Find category by ID in the menu tree
    function findCategoryById(categories, categoryId) {
        if (!Array.isArray(categories)) {
            return null;
        }
        
        const id = parseInt(categoryId);
        
        if (id >= 0 && id < categories.length) {
            return categories[id];
        }
        
        return null;
    }

    // Generate HTML for submenu based on category type
    function generateSubmenuHTML(categoryId, parentElement) {
        const menuData = getMenuData();
        const category = findCategoryById(menuData, categoryId);
        
        if (!category) {
            console.warn('Category not found:', categoryId);
            return '';
        }

        const categoryType = parentElement.dataset.categoryType;
        const categoryView = parentElement.dataset.categoryView;
        const mobile = isMobile();

        // Generate based on category type
        switch (categoryType) {
            case 'standard':
                return generateStandardMenu(category, categoryView, mobile);
            case 'category':
                return generateCategoryMenu(category, categoryView, mobile);
            case 'manufacturer':
                return generateManufacturerMenu(category, mobile);
            case 'oct_blogcategory':
                return generateBlogCategoryMenu(category, mobile);
            case 'link':
                return generateLinkMenu(category, mobile);
            default:
                return generateStandardMenu(category, categoryView, mobile);
        }
    }

    // Generate standard menu (supports recursive 4-level nesting)
    function generateStandardMenu(category, view, mobile) {
        if (!category.children || category.children.length === 0) {
            return '';
        }

        let html = '<div class="ds-menu-catalog' + (view == '2' ? ' ds-menu-catalog-wide' : '') + '">';
        
        // Header for mobile
        if (mobile) {
            html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3">';
            html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
            html += '<span class="menu-back-icon"></span>';
            html += escapeHtml(category.name || 'Back');
            html += '</div>';
            html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
            html += '<span class="menu-close-icon"></span>';
            html += '</button>';
            html += '</div>';
        }

        html += '<div class="ds-menu-catalog-inner">';
        html += '<ul class="ds-menu-catalog-items">';

        // Render children recursively (supports all levels)
        category.children.forEach(function(child, index) {
            html += renderMenuItem(child, index, view, mobile, 2);
        });

        html += '</ul>';
        html += '</div>';
        html += '</div>';

        return html;
    }

    // Recursively render menu item with children
    function renderMenuItem(item, index, view, mobile, level) {
        let html = '<li class="ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text"';
        html += ' data-child-id="' + index + '" data-level="' + level + '">';
        html += '<a href="' + escapeHtml(item.href || '#') + '" title="' + escapeHtml(item.name || '') + '">';
        html += escapeHtml(item.name || '');
        html += '</a>';

        // If item has children, add chevron and nested submenu
        if (item.children && item.children.length > 0) {
            html += '<span class="menu-chevron-icon' + (view == '2' ? ' d-xl-none' : '') + '"></span>';
            html += '<div class="ds-menu-catalog">';
            
            // Header for mobile on nested levels
            if (mobile) {
                html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none">';
                html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
                html += '<span class="menu-back-icon"></span>';
                html += escapeHtml(item.name || 'Back');
                html += '</div>';
                html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
                html += '<span class="menu-close-icon"></span>';
                html += '</button>';
                html += '</div>';
            }

            html += '<div class="ds-menu-catalog-inner">';
            html += '<ul class="ds-menu-catalog-items">';

            // Recursively render children
            item.children.forEach(function(child, childIndex) {
                html += renderMenuItem(child, childIndex, view, mobile, level + 1);
            });

            html += '</ul>';
            html += '</div>';
            html += '</div>';
        }

        html += '</li>';
        return html;
    }

    // Generate category menu (supports recursive 4-level nesting)
    function generateCategoryMenu(category, view, mobile) {
        if (!category.children || category.children.length === 0) {
            return '';
        }

        let html = '<div class="ds-menu-catalog' + (view == '2' ? ' ds-menu-catalog-wide' : '') + '">';
        
        // Header for mobile
        if (mobile) {
            html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none">';
            html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
            html += '<span class="menu-back-icon"></span>';
            html += escapeHtml(category.name || 'Back');
            html += '</div>';
            html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
            html += '<span class="menu-close-icon"></span>';
            html += '</button>';
            html += '</div>';
        }

        html += '<div class="ds-menu-catalog-inner">';
        html += '<ul class="ds-menu-catalog-items">';

        // Render children recursively (supports all levels)
        category.children.forEach(function(child, index) {
            html += renderCategoryMenuItem(child, index, category, view, mobile, 2);
        });

        html += '</ul>';
        html += '</div>';
        html += '</div>';

        return html;
    }

    // Recursively render category menu item with children
    function renderCategoryMenuItem(item, index, parentCategory, view, mobile, level) {
        let html = '<li class="ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text"';
        html += ' data-child-id="' + index + '" data-level="' + level + '">';
        html += '<a href="' + escapeHtml(item.href || '#') + '" title="' + escapeHtml(item.name || '') + '" class="d-flex align-items-center">';
        
        // Only show images on level 2 if available
        if (level === 2 && item.oct_image && parentCategory.subcat_image_width && parentCategory.subcat_image_height) {
            html += '<img class="me-3" src="' + escapeHtml(item.oct_image) + '" alt="' + escapeHtml(parentCategory.name || '') + '"';
            html += ' width="' + parentCategory.subcat_image_width + '" height="' + parentCategory.subcat_image_height + '" loading="lazy" />';
        }
        
        html += escapeHtml(item.name || '');
        html += '</a>';

        // If item has children, add chevron and nested submenu
        if (item.children && item.children.length > 0) {
            html += '<span class="menu-chevron-icon' + (view == '2' ? ' d-xl-none' : '') + '"></span>';
            html += '<div class="ds-menu-catalog">';
            
            // Header for mobile on nested levels
            if (mobile) {
                html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none">';
                html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
                html += '<span class="menu-back-icon"></span>';
                html += escapeHtml(item.name || 'Back');
                html += '</div>';
                html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
                html += '<span class="menu-close-icon"></span>';
                html += '</button>';
                html += '</div>';
            }

            html += '<div class="ds-menu-catalog-inner">';
            html += '<ul class="ds-menu-catalog-items">';

            // Recursively render children
            item.children.forEach(function(child, childIndex) {
                html += renderCategoryMenuItem(child, childIndex, parentCategory, view, mobile, level + 1);
            });

            html += '</ul>';
            html += '</div>';
            html += '</div>';
        }

        html += '</li>';
        return html;
    }

    // Generate manufacturer menu
    function generateManufacturerMenu(category, mobile) {
        if (!category.children || category.children.length === 0) {
            return '';
        }

        let html = '<div class="ds-menu-catalog' + (category.show_image ? ' ds-menu-catalog-wide' : '') + '">';
        
        // Header for mobile
        if (mobile) {
            html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none">';
            html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
            html += '<span class="menu-back-icon"></span>';
            html += escapeHtml(category.name || 'Back');
            html += '</div>';
            html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
            html += '<span class="menu-close-icon"></span>';
            html += '</button>';
            html += '</div>';
        }

        if (category.show_image) {
            // Grid view with images
            html += '<div class="ds-megamenu-children ds-megamenu-children-manufacturers flex-grow-1 d-flex flex-wrap flex-column flex-xl-row dark-text gap-xl-3">';
            category.children.forEach(function(child) {
                html += '<div class="ds-megamenu-children-item text-xl-center">';
                html += '<a href="' + escapeHtml(child.href || '#') + '" title="' + escapeHtml(child.name || '') + '"';
                html += ' class="ds-megamenu-children-title fw-700 d-flex flex-xl-column align-items-center px-3 py-2 p-xl-2 fsz-14">';
                
                if (child.oct_image && category.subcat_image_width && category.subcat_image_height) {
                    html += '<img class="my-xl-2 me-3 mx-xl-auto" src="' + escapeHtml(child.oct_image) + '"';
                    html += ' alt="' + escapeHtml(category.name || '') + '"';
                    html += ' width="' + category.subcat_image_width + '" height="' + category.subcat_image_height + '" loading="lazy" />';
                }
                
                html += '<span class="flex-grow-1">' + escapeHtml(child.name || '') + '</span>';
                html += '</a>';
                html += '</div>';
            });
            html += '</div>';
        } else {
            // List view
            html += '<div class="ds-menu-catalog-inner">';
            html += '<ul class="ds-menu-catalog-items">';
            category.children.forEach(function(child) {
                html += '<li class="ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text">';
                html += '<a href="' + escapeHtml(child.href || '#') + '">' + escapeHtml(child.name || '') + '</a>';
                html += '</li>';
            });
            html += '</ul>';
            html += '</div>';
        }

        html += '</div>';
        return html;
    }

    // Generate blog category menu (supports recursive 4-level nesting)
    function generateBlogCategoryMenu(category, mobile) {
        if (!category.children || category.children.length === 0) {
            return '';
        }

        let html = '<div class="ds-menu-catalog">';
        
        if (mobile) {
            html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none">';
            html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
            html += '<span class="menu-back-icon"></span>';
            html += escapeHtml(category.name || 'Back');
            html += '</div>';
            html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
            html += '<span class="menu-close-icon"></span>';
            html += '</button>';
            html += '</div>';
        }

        html += '<div class="ds-menu-catalog-inner">';
        html += '<ul class="ds-menu-catalog-items">';

        // Render children recursively (supports all levels)
        category.children.forEach(function(child, index) {
            html += renderBlogMenuItem(child, index, mobile, 2);
        });

        html += '</ul>';
        html += '</div>';
        html += '</div>';

        return html;
    }

    // Recursively render blog menu item with children
    function renderBlogMenuItem(item, index, mobile, level) {
        let html = '<li class="ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text"';
        html += ' data-child-id="' + index + '" data-level="' + level + '">';
        html += '<a href="' + escapeHtml(item.href || '#') + '" class="flex-grow-1">' + escapeHtml(item.name || '') + '</a>';

        // If item has children, add chevron and nested submenu
        if (item.children && item.children.length > 0) {
            html += '<span class="menu-chevron-icon"></span>';
            html += '<div class="ds-menu-catalog">';
            
            // Header for mobile on nested levels
            if (mobile) {
                html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none">';
                html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
                html += '<span class="menu-back-icon"></span>';
                html += escapeHtml(item.name || 'Back');
                html += '</div>';
                html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
                html += '<span class="menu-close-icon"></span>';
                html += '</button>';
                html += '</div>';
            }

            html += '<div class="ds-menu-catalog-inner">';
            html += '<ul class="ds-menu-catalog-items">';

            // Recursively render children
            item.children.forEach(function(child, childIndex) {
                html += renderBlogMenuItem(child, childIndex, mobile, level + 1);
            });

            html += '</ul>';
            html += '</div>';
            html += '</div>';
        }

        html += '</li>';
        return html;
    }

    // Generate link menu
    function generateLinkMenu(category, mobile) {
        if (!category.sub_links || category.sub_links.length === 0) {
            return '';
        }

        let html = '<div class="ds-menu-catalog">';
        
        if (mobile) {
            html += '<div class="ds-sidebar-header d-flex align-items-center justify-content-between py-2 px-3 d-xl-none">';
            html += '<div class="ds-sidebar-header-back fw-700 dark-text fsz-16 d-flex align-items-center" data-sidebar="catalogback">';
            html += '<span class="menu-back-icon"></span>';
            html += escapeHtml(category.name || 'Back');
            html += '</div>';
            html += '<button type="button" class="button button-light br-10 ds-sidebar-close" data-sidebar="catalogclose" aria-label="Close">';
            html += '<span class="menu-close-icon"></span>';
            html += '</button>';
            html += '</div>';
        }

        html += '<div class="ds-menu-catalog-inner">';
        html += '<ul class="ds-menu-catalog-items">';

        category.sub_links.forEach(function(link) {
            html += '<li class="ds-menu-catalog-item d-flex align-items-center justify-content-between fsz-14 dark-text">';
            html += '<a href="' + escapeHtml(link.href || '#') + '" ' + (category.target || '') + '>';
            html += escapeHtml(link.title || link.name || '');
            html += '</a>';
            html += '</li>';
        });

        html += '</ul>';
        html += '</div>';
        html += '</div>';

        return html;
    }

    // Escape HTML to prevent XSS
    function escapeHtml(text) {
        if (typeof text !== 'string') {
            return '';
        }
        var map = {
            '&': '&amp;',
            '<': '&lt;',
            '>': '&gt;',
            '"': '&quot;',
            "'": '&#039;'
        };
        return text.replace(/[&<>"']/g, function(m) { return map[m]; });
    }

    // Handle menu item click (for items with chevron icons)
    function handleMenuItemClick(event) {
        // Only handle clicks on the menu item itself, not on links or other elements
        const target = event.target;
        const menuItem = event.currentTarget;
        
        // If clicking directly on a link <a> tag, let it navigate normally
        if (target.tagName === 'A' || target.closest('a')) {
            return;
        }

        // Check if this item has children or a submenu
        const submenu = menuItem.querySelector(':scope > .ds-menu-catalog');
        const hasSubmenu = submenu !== null;
        
        // Level 4 items (no submenu) - click should navigate to the link
        if (!hasSubmenu) {
            const link = menuItem.querySelector('a');
            if (link) {
                window.location.href = link.href;
            }
            return;
        }

        // Prevent default behavior when opening submenu
        event.preventDefault();
        event.stopPropagation();

        // Show the submenu
        if (isMobile()) {
            submenu.classList.add('active');
        }
    }

    // Handle chevron icon click specifically (same behavior as clicking item background)
    function handleChevronClick(event) {
        event.preventDefault();
        event.stopPropagation();
        
        const chevron = event.currentTarget;
        const menuItem = chevron.closest('.ds-menu-catalog-item, .ds-menu-maincategories-item');
        
        if (!menuItem) {
            return;
        }

        // Get the submenu (should already be in DOM from recursive generation)
        let submenu = menuItem.querySelector(':scope > .ds-menu-catalog');
        
        if (!submenu && menuItem.dataset.hasChildren === 'true') {
            // Top-level item - generate submenu
            const categoryId = menuItem.dataset.categoryId;
            const submenuHTML = generateSubmenuHTML(categoryId, menuItem);
            
            if (submenuHTML) {
                menuItem.insertAdjacentHTML('beforeend', submenuHTML);
                submenu = menuItem.querySelector(':scope > .ds-menu-catalog');
                
                // Reinitialize click handlers for new elements
                attachAllHandlers();
            }
        }

        // Show the submenu
        if (submenu) {
            if (isMobile()) {
                submenu.classList.add('active');
            }
        }
    }

    // Handle back button click
    function handleBackButtonClick(event) {
        event.preventDefault();
        event.stopPropagation();
        
        const backButton = event.currentTarget;
        const currentMenu = backButton.closest('.ds-menu-catalog');
        
        if (currentMenu) {
            currentMenu.classList.remove('active');
        }
    }

    // Handle close button click
    function handleCloseButtonClick(event) {
        event.preventDefault();
        event.stopPropagation();
        
        // Close all active menus
        const activeMenus = document.querySelectorAll('.ds-menu-catalog.active');
        activeMenus.forEach(function(menu) {
            menu.classList.remove('active');
        });
        
        // Close main menu
        const mainMenu = document.querySelector('.ds-menu-main-catalog');
        if (mainMenu) {
            mainMenu.classList.remove('active');
        }
        
        // Remove body scroll lock
        document.body.classList.remove('no-scroll');
        
        // Hide overlay
        const overlay = document.getElementById('overlay');
        if (overlay) {
            overlay.classList.remove('active');
        }
    }

    // Attach click handlers to menu items (all levels)
    function attachMenuClickHandlers() {
        // Attach to top-level items with children
        const topLevelItems = document.querySelectorAll('[data-has-children="true"]');
        
        topLevelItems.forEach(function(menuItem) {
            menuItem.removeEventListener('click', handleMenuItemClick);
            menuItem.addEventListener('click', handleMenuItemClick);
        });

        // Attach to ALL menu items including dynamically generated ones
        const allMenuItems = document.querySelectorAll('.ds-menu-catalog-item');
        
        allMenuItems.forEach(function(menuItem) {
            menuItem.removeEventListener('click', handleMenuItemClick);
            menuItem.addEventListener('click', handleMenuItemClick);
        });

        // Attach to all chevron icons (including dynamically generated ones)
        const chevronIcons = document.querySelectorAll('.menu-chevron-icon');
        
        chevronIcons.forEach(function(chevron) {
            chevron.removeEventListener('click', handleChevronClick);
            chevron.addEventListener('click', handleChevronClick);
        });
    }

    // Attach handlers to back and close buttons
    function attachBackCloseHandlers() {
        // Back buttons
        const backButtons = document.querySelectorAll('[data-sidebar="catalogback"]');
        backButtons.forEach(function(button) {
            button.removeEventListener('click', handleBackButtonClick);
            button.addEventListener('click', handleBackButtonClick);
        });

        // Close buttons
        const closeButtons = document.querySelectorAll('[data-sidebar="catalogclose"]');
        closeButtons.forEach(function(button) {
            button.removeEventListener('click', handleCloseButtonClick);
            button.addEventListener('click', handleCloseButtonClick);
        });
    }

    // Attach all handlers (menu items, chevrons, back, close)
    function attachAllHandlers() {
        attachMenuClickHandlers();
        attachBackCloseHandlers();
    }

    // Initialize on page load
    function init() {
        if (typeof window.octMenuData !== 'undefined') {
            attachAllHandlers();
            console.log('Menu lazy loading initialized. Initial DOM size reduced.');
        } else {
            console.warn('Menu data not found. Lazy loading not initialized.');
        }
    }

    // Wait for DOM to be ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

    // Export functions for external use if needed
    window.menuLazyLoad = {
        init: init,
        attachHandlers: attachAllHandlers,
        reattachHandlers: attachAllHandlers
    };

})();

