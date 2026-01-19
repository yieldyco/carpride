<?php if(!empty($layout_hl) && !empty($hand_links_fv[$layout_hl]['links'])) { ?>
    <?php $flag_image = 0; $cls_row = ''; $cls_col = ''; $cls_img = ''; $scroll_hl = 'scroll_hl'; if($hand_links_fv[$layout_hl]['flag_image']) {$flag_image = 1; $cls_row = 'row'; $cls_col = 'col-xs-6 col-sm-4 col-md-4 col-lg-2'; $cls_img = 'hand_link_fv_img'; $scroll_hl = '';} ?>
    <?php $cls_animal = ''; if($hand_links_fv[$layout_hl]['flag_group_animal']) {$cls_animal = 'group_animal';} ?>
    <div class="blok_hand_links_fv hl_<?php echo $layout_hl; ?> hl_page_<?php echo $hand_links_fv[$layout_hl]['is_page']; ?> <?php echo $cls_img; ?> <?php echo $cls_animal; ?>">
        <?php if(!empty($hand_links_fv[$layout_hl]['title_blok'])) { ?>
        <div class="title_blok_hand_links_fv"><?php echo $hand_links_fv[$layout_hl]['title_blok']; ?></div>
        <?php } ?>
        <div class="blok_hl">
            <?php if($hand_links_fv[$layout_hl]['flag_group']) { ?>
                <?php //$cls_animal = ''; if($hand_links_fv[$layout_hl]['flag_group_animal']) {$cls_animal = 'group_animal';} ?>
                <?php foreach($hand_links_fv[$layout_hl]['links'] as $group_id => $val_group) { ?>
                    <?php $name_group = $val_group['name_group']; if($name_group) {$group_animal = $cls_animal;} else {$group_animal = '';} ?>
                    <?php if($group_animal && $val_group['action']) {$block_actin = 'block_actin';} else {$block_actin = '';} ?>
                    <div class="block_hl_group group_id_<?php echo $group_id; ?> <?php echo $group_animal; ?> <?php echo $block_actin; ?>">
                        <?php if($name_group) { ?>
                            <div class="name_group_hl"><span class="text_name_group"><?php echo $name_group; ?></span><span class="icon_group"></span></div>
                        <?php } ?>
                        <div class="blok_hand_links_fv_a <?php echo $scroll_hl; ?> <?php echo $cls_row; ?> <?php echo $block_actin; ?>">
                        <?php foreach($val_group['hand_links_fv'] as $val) { ?>
                            <?php if($flag_image) { ?>
                                <div class="<?php echo $cls_col; ?>">
                                    <div class="image_thumb">
                                        <div class="image"><a href="<?php echo $val['href']; ?>"><img src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['name']; ?>" class="img-responsive" /></a></div>
                                        <div class="text_h">
                                            <a href="<?php echo $val['href']; ?>" class="hl_id_<?php echo $val['id']; ?> <?php echo $val['action'] ? 'action_hl_fv' : ''; ?>"><span><?php echo $val['name']; ?></span></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <a href="<?php echo $val['href']; ?>" class="hand_link_fv hl_id_<?php echo $val['id']; ?> <?php echo $val['action'] ? 'action_hl_fv' : ''; ?>"><span><?php echo $val['name']; ?></span></a>
                            <?php } ?>
                        <?php } ?>
                		</div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <div class="blok_hand_links_fv_a <?php echo $scroll_hl; ?> <?php echo $cls_row; ?>">
                    <?php foreach($hand_links_fv[$layout_hl]['links'] as $val) { ?>
                        <?php if($flag_image) { ?>
                            <div class="<?php echo $cls_col; ?>">
                                <div class="image_thumb">
                                    <div class="image"><a href="<?php echo $val['href']; ?>"><img src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['name']; ?>" class="img-responsive" /></a></div>
                                    <div class="text_h">
                                        <a href="<?php echo $val['href']; ?>" class="hl_id_<?php echo $val['id']; ?> <?php echo $val['action'] ? 'action_hl_fv' : ''; ?>"><span><?php echo $val['name']; ?></span></a>
                                    </div>
                                </div>
                            </div>
                        <?php } else { ?>
                            <a href="<?php echo $val['href']; ?>" class="hand_link_fv hl_id_<?php echo $val['id']; ?> <?php echo $val['action'] ? 'action_hl_fv' : ''; ?>"><span><?php echo $val['name']; ?></span></a>
                        <?php } ?>
                    <?php } ?>
            	</div>
            <?php } ?>
        </div>
    </div>
<?php } ?>