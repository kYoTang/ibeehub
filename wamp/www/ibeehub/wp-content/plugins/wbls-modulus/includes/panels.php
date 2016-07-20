<?php
/**
 * Integrates this theme with SiteOrigin Page Builder.
 * 
 * @package webulous
 * @since 1.0
 * @license GPL 2.0
 */

/**
 * Adds default page layouts
 *
 * @param $layouts
 */
if (!function_exists('webulous_prebuilt_page_layouts') ) {   

function webulous_prebuilt_page_layouts($layouts){
  $layouts['default-home'] = array (
    'name' => __('Default Home', 'wbls-modulus'),
    'description' => __('Pre Built Layout for  home page', 'wbls-modulus'),
    'widgets' =>  array(
       0 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'title' => 'our services',
            'text' => '',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text', 
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Responsive Layout',
            'text' => 'Modulus is fully responsive and can adapt to any screen size. Resize your browser window to view it!.',
            'icon' => 'fa-mobile',
            'icon_background_color' => '',
            'icon_size' => '3x',
            'icon_placement' => 'top',
            'more' => '',
            'more_url' => '',
            'panels_info' => 
            array (
              'class' => 'Wbls_Icon_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 0,
              'id' => 1,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'title' => 'Awesome Slider',
            'text' => 'Modulus includes two types of slider. You can use both Flex and Elastic sliders anywhere in your site.',
            'icon' => 'fa-random',
            'icon_background_color' => '',
            'icon_size' => '3x',
            'icon_placement' => 'top',
            'more' => '',
            'more_url' => '',
            'panels_info' => 
            array (
              'class' => 'Wbls_Icon_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          3 => 
          array (
            'title' => 'Font Awesome',
            'text' => 'Font Awesome icons are fully integrated into the theme. Use them anywhere in your site in 6 different sizes!',
            'icon' => 'fa-flag',
            'icon_background_color' => '',
            'icon_size' => '3x',
            'icon_placement' => 'top',
            'more' => '',
            'more_url' => '',
            'panels_info' => 
            array (
              'class' => 'Wbls_Icon_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 2,
              'id' => 3,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
          1 => 
          array (
            'cells' => 3,
            'style' => 
            array (
              'class' => 'no-default-margin',
              'cell_class' => '',
              'row_css' => '',
              'bottom_margin' => '',
              'gutter' => '',
              'padding' => '',
              'row_stretch' => '',
              'background' => '',
              'background_image_attachment' => '0',
              'background_display' => 'tile',
              'border_color' => '',
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
          1 => 
          array (
            'grid' => 1,
            'weight' => 0.33333333333332998,
          ),
          2 => 
          array (
            'grid' => 1,
            'weight' => 0.33333333333332998,
          ),
          3 => 
          array (
            'grid' => 1,
            'weight' => 0.33333333333332998,
          ),
        ),
      ),
      'builder_id' => '568e1952800a7',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    1 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'title' => 'meet our creators',
            'text' => '',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Jessica Lee',
            'designation' => 'Manager',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.linkedln.com',
            'google' => 'www.google.com',
            'twitter' => 'www.twitter.com',
            'facebook' => 'www.facebook.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 0,
              'id' => 1,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'title' => 'Louis Johnson',
            'designation' => 'Designer',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.linkedln.com',
            'google' => 'www.google.com',
            'twitter' => 'www.twitter.com',
            'facebook' => 'www.facebook.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          3 => 
          array (
            'title' => 'Merry Doe',
            'designation' => 'Developer',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.linkedln.com',
            'google' => 'www.google.com',
            'twitter' => 'www.twitter.com',
            'facebook' => 'www.facebook.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 2,
              'id' => 3,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          4 => 
          array (
            'title' => 'Drake Brown',
            'designation' => 'Programmer',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.linkedln.com',
            'google' => 'www.google.com',
            'twitter' => 'www.twitter.com',
            'facebook' => 'www.facebook.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 3,
              'id' => 4,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
          1 => 
          array (
            'cells' => 4,
            'style' => 
            array (
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
          1 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          2 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          3 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          4 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
        ),
      ),
      'builder_id' => '568e36fbe6cd8',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 1,
        'cell' => 0,
        'id' => 1,
        'style' => 
        array (
          'class' => 'no-default-margin',
          'background_display' => 'tile',
        ),
      ),
    ),
    2 => 
    array (
      'title' => 'Skills',
      'panels_info' => 
      array (
        'class' => 'Wbls_Skill_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 0,
        'id' => 2,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    3 => 
    array (
      'title' => 'Our Accordion',
      'text' => '[accordion_group][accordion title="Aliquam rutrum tortor quis ultrices ultricies."]In sodales tellus sed arcu euismod tempor. Curabitur fringilla nibh quis lorem interdum mattis. Vivamus ornare placerat tellus ut accumsan. Fusce rutrum faucibus varius. Nunc a ipsum sit amet arcu dapibus egestas ut ut lorem. Integer sagittis mi nec nisl condimentum congue. Cras venenatis a nibh ut placerat. [/accordion][accordion title="Curabitur rutrum vehicula enim et pulvinar."] Sed nec massa lorem. Phasellus ut tincidunt velit, id scelerisque lorem. Nullam nisl tortor, mollis ut massa in, dapibus tincidunt libero. Pellentesque pretium posuere turpis eget dignissim. Curabitur sapien lorem, feugiat et velit et, vehicula aliquet urna. Vivamus pellentesque lorem at urna suscipit, at vulputate est ultricies. Aliquam ultrices nec massa sed adipiscing. Pellentesque feugiat sodales tellus. Ut tempus aliquam felis, quis consequat nunc hendrerit eget. Praesent sollicitudin nunc eu sollicitudin placerat. Praesent dapibus erat turpis, sodales aliquet justo consectetur eget. Nam mattis consectetur nunc nec dapibus. Nam malesuada, diam nec imperdiet luctus, lacus turpis facilisis dui, sed lobortis sem justo vitae odio. Sed tincidunt consectetur est eget sodales. In laoreet ligula id eros convallis, nec rutrum turpis tempor. [/accordion][accordion title="Pellentesque iaculis vulputate blandit."]Aliquam non lacus in lacus aliquet blandit. Cras sodales nisi at ultrices malesuada. Donec sodales mattis cursus. Nam feugiat feugiat felis sit amet tincidunt. Sed ut augue vitae augue vestibulum pulvinar. Fusce commodo ultricies volutpat. Vivamus quis nulla porta, faucibus metus eu, tempus dolor. Ut sed faucibus mi, ac volutpat lectus. Morbi a rhoncus erat. Mauris et metus posuere, imperdiet urna at, congue risus. Nunc at ante sed ipsum porttitor scelerisque semper non libero. Vivamus feugiat nisl sit amet mi tristique dictum. Donec id magna facilisis, euismod sem bibendum, interdum lorem. Praesent dapibus erat turpis, sodales aliquet justo consectetur eget. Nam mattis consectetur nunc nec dapibus. Nam malesuada, diam nec imperdiet luctus, lacus turpis facilisis dui, sed lobortis sem justo vitae odio. Sed tincidunt consectetur est eget sodales. In laoreet ligula id eros convallis, nec rutrum turpis tempor. [/accordion][/accordion_group]',
      'filter' => false,
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Text',
        'raw' => false,
        'grid' => 2,
        'cell' => 1,
        'id' => 3,
        'style' => 
        array (
          'class' => 'title-divider-left',
          'background_display' => 'tile',
        ),
      ),
    ),
    4 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'src' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/theme-brief-img.png',
            'href' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/theme-brief-img.png',
            'panels_info' => 
            array (
              'class' => 'Wbls_Image_Widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'theme brief',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. minim veniam, quis nostrud exercitation ullamco.',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => false,
              'grid' => 0,
              'cell' => 1,
              'id' => 1,
              'style' => 
              array (
                'class' => 'title-divider-left head-font-size',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'title' => '',
            'list' => '*10 Color Schemes
*Responsive Layouts
*Animation Effects
*Fully Customizable
*Flex Slider
*Uniq Banners
',
            'icon' => 'fa-chevron-right',
            'color' => '',
            'panels_info' => 
            array (
              'class' => 'Wbls_List_Widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 2,
            'style' => 
            array (
              'class' => '',
              'cell_class' => '',
              'row_css' => '',
              'bottom_margin' => '',
              'gutter' => '',
              'padding' => '',
              'row_stretch' => '',
              'background' => '',
              'background_image_attachment' => '0',
              'background_display' => 'tile',
              'border_color' => '',
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 0.37975951903807997,
          ),
          1 => 
          array (
            'grid' => 0,
            'weight' => 0.62024048096191997,
          ),
        ),
      ),
      'builder_id' => '5694daf6acadc',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 3,
        'cell' => 0,
        'id' => 4,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    5 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'title' => 'Our Tabs',
            'text' => '[tabs_group type="normal"][tabs title="Graphics"]Donec aliquam, lectus vel facilisis efficitur, turpis augue consequat augue, in volutpat massa lectus ut felis. Integer scelerisque tellus non ligula volutpat, consequat pellentesque sapien pellentesque. Quisque sed nisi vel mauris ornare mollis. Vestibulum vel nisi vel augue rhoncus facilisis. Vivamus imperdiet convallis dolor, id ornare elit interdum eu. Morbi velit turpis, faucibus non semper at, dignissim sit amet tortor. Donec ex nunc, ornare vel lectus eget, congue varius quam.[/tabs][tabs title="Web Design"] It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.[/tabs][tabs title="Word Press"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.[/tabs][/tabs_group]
',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => true,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider-left',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'why choose theme',
            'text' => '',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => false,
              'grid' => 0,
              'cell' => 1,
              'id' => 1,
              'style' => 
              array (
                'class' => 'title-divider-left',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'src' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/why-choose-img.png',
            'href' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/why-choose-img.png',
            'panels_info' => 
            array (
              'class' => 'Wbls_Image_Widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 2,
            'style' => 
            array (
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 0.5,
          ),
          1 => 
          array (
            'grid' => 0,
            'weight' => 0.5,
          ),
        ),
      ),
      'builder_id' => '5694db410d386',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'grid' => 4,
        'cell' => 0,
        'id' => 5,
        'style' => 
        array (
          'background_image_attachment' => false,
          'background_display' => 'tile',
        ),
      ),
    ),
    6 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'title' => 'Our Recent Projects',
            'count' => '12',
            'type' => 'isotope',
            'panels_info' => 
            array (
              'class' => 'Wbls_Recent_Work_Widget',
              'raw' => true,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
        ),
      ),
      'builder_id' => '56948984278d2',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 5,
        'cell' => 0,
        'id' => 6,
        'style' => 
        array (
          'class' => 'no-default-margin',
          'background_display' => 'tile',
        ),
      ),
    ),
    7 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'title' => 'Fun Facts',
            'text' => '',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => '478',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => false,
              'grid' => 1,
              'cell' => 0,
              'id' => 1,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'title' => '479',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => false,
              'grid' => 1,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          3 => 
          array (
            'title' => '480',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => false,
              'grid' => 1,
              'cell' => 2,
              'id' => 3,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          4 => 
          array (
            'title' => '481',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => false,
              'grid' => 1,
              'cell' => 3,
              'id' => 4,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
          1 => 
          array (
            'cells' => 4,
            'style' => 
            array (
              'class' => '',
              'cell_class' => '',
              'row_css' => '',
              'bottom_margin' => '',
              'gutter' => '',
              'padding' => '',
              'row_stretch' => '',
              'background' => '',
              'background_image_attachment' => '0',
              'background_display' => 'tile',
              'border_color' => '',
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
          1 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          2 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          3 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          4 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
        ),
      ),
      'builder_id' => '5694898427912',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 6,
        'cell' => 0,
        'id' => 7,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    8 => 
    array (
      'level' => '1',
      'type' => 'normal',
      'content' => 'Our Testimonials',
      'panels_info' => 
      array (
        'class' => 'Wbls_Heading_Widget',
        'raw' => false,
        'grid' => 7,
        'cell' => 0,
        'id' => 8,
        'style' => 
        array (
          'class' => 'title-divider head-color-white',
          'background_display' => 'tile',
        ),
      ),
    ),
    9 => 
    array (
      'title' => 'Our Testimonials',
      'count' => '5',
      'panels_info' => 
      array (
        'class' => 'Wbls_Testimonial_Widget',
        'raw' => false,
        'grid' => 7,
        'cell' => 0,
        'id' => 9,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    10 => 
    array (
      'slider' => 'home-clients',
      'type' => 'carousel',
      'panels_info' => 
      array (
        'class' => 'Wbls_FlexSlider_Widget',
        'raw' => false,
        'grid' => 8,
        'cell' => 0,
        'id' => 10,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    1 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
    2 => 
    array (
      'cells' => 2,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    3 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
    4 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    5 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
    6 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    7 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout blue-pattern',
        'row_stretch' => 'full',
        'background_display' => 'cover',
      ),
    ),
    8 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 1,
    ),
    2 => 
    array (
      'grid' => 2,
      'weight' => 0.5,
    ),
    3 => 
    array (
      'grid' => 2,
      'weight' => 0.5,
    ),
    4 => 
    array (
      'grid' => 3,
      'weight' => 1,
    ),
    5 => 
    array (
      'grid' => 4,
      'weight' => 1,
    ),
    6 => 
    array (
      'grid' => 5,
      'weight' => 1,
    ),
    7 => 
    array (
      'grid' => 6,
      'weight' => 1,
    ),
    8 => 
    array (
      'grid' => 7,
      'weight' => 1,
    ),
    9 => 
    array (
      'grid' => 8,
      'weight' => 1,
    ),
    
    ),

  );

  $layouts['about-us'] = array(
    'name' => __('About Us', 'wbls-modulus'),
    'description' => __( 'Pre Built layout for about us page', 'wbls-modulus'),
    'widgets' => array(
         0 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'level' => '1',
            'type' => 'normal',
            'content' => 'About Us',
            'panels_info' => 
            array (
              'class' => 'Wbls_Heading_Widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'panels_data' => 
            array (
              'widgets' => 
              array (
                0 => 
                array (
                  'type' => 'square',
                  'title' => 'Responsive Layout',
                  'text' => 'Modulus is fully responsive and can adapt to any screen size. Resize your browser window to view it!.',
                  'icon' => 'fa-mobile',
                  'icon_background_color' => '',
                  'icon_size' => '3x',
                  'more' => '',
                  'more_url' => '',
                  'panels_info' => 
                  array (
                    'class' => 'Wbls_CircleIcon_Widget',
                    'raw' => false,
                    'grid' => 0,
                    'cell' => 0,
                    'id' => 0,
                    'style' => 
                    array (
                      'class' => '',
                      'widget_css' => '',
                      'padding' => '',
                      'background' => '',
                      'background_image_attachment' => '0',
                      'background_display' => 'tile',
                      'border_color' => '',
                      'font_color' => '',
                    ),
                  ),
                ),
                1 => 
                array (
                  'type' => 'square',
                  'title' => ' Awesome Slider',
                  'text' => 'Modulus includes two types of slider. You can use both Flex and Elastic sliders anywhere in your site.',
                  'icon' => 'fa-magic',
                  'icon_background_color' => '',
                  'icon_size' => '3x',
                  'more' => '',
                  'more_url' => '',
                  'panels_info' => 
                  array (
                    'class' => 'Wbls_CircleIcon_Widget',
                    'raw' => false,
                    'grid' => 0,
                    'cell' => 0,
                    'id' => 1,
                    'style' => 
                    array (
                      'class' => '',
                      'widget_css' => '',
                      'padding' => '',
                      'background' => '',
                      'background_image_attachment' => '0',
                      'background_display' => 'tile',
                      'border_color' => '',
                      'font_color' => '',
                    ),
                  ),
                ),
              ),
              'grids' => 
              array (
                0 => 
                array (
                  'cells' => 1,
                  'style' => 
                  array (
                  ),
                ),
              ),
              'grid_cells' => 
              array (
                0 => 
                array (
                  'grid' => 0,
                  'weight' => 1,
                ),
              ),
            ),
            'builder_id' => '5624df3492f90',
            'panels_info' => 
            array (
              'class' => 'SiteOrigin_Panels_Widgets_Layout',
              'raw' => true,
              'grid' => 1,
              'cell' => 0,
              'id' => 1,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'src' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/theme-brief-img.png',
            'href' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/theme-brief-img.png',
            'panels_info' => 
            array (
              'class' => 'Wbls_Image_Widget',
              'raw' => false,
              'grid' => 1,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
          1 => 
          array (
            'cells' => 2,
            'style' => 
            array (
              'class' => '',
              'cell_class' => '',
              'row_css' => '',
              'bottom_margin' => '',
              'gutter' => '',
              'padding' => '',
              'row_stretch' => '',
              'background' => '',
              'background_image_attachment' => '0',
              'background_display' => 'tile',
              'border_color' => '',
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
          1 => 
          array (
            'grid' => 1,
            'weight' => 0.6292585170340681,
          ),
          2 => 
          array (
            'grid' => 1,
            'weight' => 0.3707414829659319,
          ),
        ),
      ),
      'builder_id' => '5694dbce58173',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' => 
        array (
          'background_image_attachment' => false,
          'background_display' => 'tile',
        ),
      ),
    ),
    1 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'level' => '1',
            'type' => 'normal',
            'content' => 'Fun Facts',
            'panels_info' => 
            array (
              'class' => 'Wbls_Heading_Widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider head-color-white',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => '481',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 0,
              'id' => 1,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'title' => '480',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          3 => 
          array (
            'title' => '479',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 2,
              'id' => 3,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          4 => 
          array (
            'title' => '478',
            'panels_info' => 
            array (
              'class' => 'Wbls_Stats_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 3,
              'id' => 4,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
          1 => 
          array (
            'cells' => 4,
            'style' => 
            array (
              'class' => 'stat-white',
              'cell_class' => '',
              'row_css' => '',
              'bottom_margin' => '',
              'gutter' => '',
              'padding' => '',
              'row_stretch' => '',
              'background' => '',
              'background_image_attachment' => '0',
              'background_display' => 'tile',
              'border_color' => '',
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
          1 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          2 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          3 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          4 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
        ),
      ),
      'builder_id' => '568f4d118c48e',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 1,
        'cell' => 0,
        'id' => 1,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    2 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'level' => '1',
            'type' => 'normal',
            'content' => 'meet our creators',
            'panels_info' => 
            array (
              'class' => 'Wbls_Heading_Widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Jessica Lee',
            'designation' => 'Manager',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.google.com',
            'google' => 'www.google.com',
            'twitter' => 'www.google.com',
            'facebook' => 'www.google.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 0,
              'id' => 1,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'title' => 'Louis Johnson',
            'designation' => 'Designer',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.google.com',
            'google' => 'www.google.com',
            'twitter' => 'www.google.com',
            'facebook' => 'www.google.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          3 => 
          array (
            'title' => 'Merry Doe',
            'designation' => 'Developer',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.google.com',
            'google' => 'www.google.com',
            'twitter' => 'www.google.com',
            'facebook' => 'www.google.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 2,
              'id' => 3,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          4 => 
          array (
            'title' => 'Drake Brown',
            'designation' => 'Programmer',
            'image_url' => 'http://modulus.codinggeek.com/wp-content/uploads/2015/09/ourteam2.jpg',
            'linkedin' => 'www.google.com',
            'google' => 'www.google.com',
            'twitter' => 'www.google.com',
            'facebook' => 'www.google.com',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.',
            'panels_info' => 
            array (
              'class' => 'Wbls_Ourteam_Widget',
              'raw' => true,
              'grid' => 1,
              'cell' => 3,
              'id' => 4,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
          1 => 
          array (
            'cells' => 4,
            'style' => 
            array (
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
          1 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          2 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          3 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
          4 => 
          array (
            'grid' => 1,
            'weight' => 0.25,
          ),
        ),
      ),
      'builder_id' => '568e3910e1645',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 2,
        'cell' => 0,
        'id' => 2,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    3 => 
    array (
      'level' => '1',
      'type' => 'normal',
      'content' => 'our testimonial',
      'panels_info' => 
      array (
        'class' => 'Wbls_Heading_Widget',
        'raw' => false,
        'grid' => 3,
        'cell' => 0,
        'id' => 3,
        'style' => 
        array (
          'class' => 'title-divider head-color-white',
          'background_display' => 'tile',
        ),
      ),
    ),
    4 => 
    array (
      'title' => 'our Testimonial',
      'count' => '5',
      'panels_info' => 
      array (
        'class' => 'Wbls_Testimonial_Widget',
        'raw' => false,
        'grid' => 3,
        'cell' => 0,
        'id' => 4,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    5 => 
    array (
      'slider' => 'clients',
      'type' => 'carousel',
      'panels_info' => 
      array (
        'class' => 'Webulous_FlexSlider_Widget',
        'raw' => false,
        'grid' => 4,
        'cell' => 0,
        'id' => 5,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    1 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout-carousel black-bg',
        'background_display' => 'tile',
      ),
    ),
    2 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    3 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout blue-pattern',
        'row_stretch' => 'full',
        'background_display' => 'cover',
      ),
    ),
    4 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 1,
    ),
    2 => 
    array (
      'grid' => 2,
      'weight' => 1,
    ),
    3 => 
    array (
      'grid' => 3,
      'weight' => 1,
    ),
    4 => 
    array (
      'grid' => 4,
      'weight' => 1,
    ),
    ),
  );
  $layouts['features'] = array(
      'name' => __('Features Page', 'wbls-modulus'),
      'description' => __( 'Pre Built layout for features page', 'wbls-modulus'),
      'widgets' => array(
          0 => 
    array (
      'title' => 'Our Features',
      'text' => '',
      'filter' => false,
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Text',
        'raw' => false,
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' => 
        array (
          'class' => 'title-divider',
          'background_display' => 'tile',
        ),
      ),
    ),
    1 => 
    array (
      'title' => 'Responsive Layout',
      'text' => 'Modulus is fully responsive and can adapt to any screen size. Resize your browser window to view it!.',
      'icon' => 'fa-mobile',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 0,
        'id' => 1,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    2 => 
    array (
      'title' => 'Awesome Slider',
      'text' => 'Modulus includes two types of slider. You can use both Flex and Elastic sliders anywhere in your site.',
      'icon' => 'fa-random',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 1,
        'id' => 2,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    3 => 
    array (
      'title' => 'Font Awesome',
      'text' => 'Font Awesome icons are fully integrated into the theme. Use them anywhere in your site in 6 different sizes!',
      'icon' => 'fa-flag',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 2,
        'id' => 3,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    4 => 
    array (
      'title' => 'Typography',
      'text' => 'Modulus loves typography, you can choose from over 500+ Google Fonts and Standard Fonts to customize your site!',
      'icon' => 'fa-font',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 0,
        'id' => 4,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    5 => 
    array (
      'title' => 'Retina Ready',
      'text' => 'Modulus is Retina Ready. So, Everything looks amazingly sharp and crisp on high resolution retina displays of all sizes!',
      'icon' => 'fa-magic',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 1,
        'id' => 5,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    6 => 
    array (
      'title' => 'Excellent Support',
      'text' => 'We truly care about our customers and theme\'s performance. We assure you that you will get the best after sale support like never before!',
      'icon' => 'fa-flag',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 2,
        'id' => 6,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    7 => 
    array (
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      'title' => 'Webulous Themes',
      'url' => 'http://www.webulousthemes.com',
      'anchor_text' => 'Purchase Now',
      'panels_info' => 
      array (
        'class' => 'Wbls_Cta_Widget',
        'raw' => false,
        'grid' => 3,
        'cell' => 0,
        'id' => 7,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    8 => 
    array (
      'title' => 'Advanced Admin',
      'text' => 'Modulus uses advanced Redux Framework for theme options panel, you can customize any part of your site quickly and easily!',
      'icon' => 'fa-thumb-tack',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 4,
        'cell' => 0,
        'id' => 8,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    9 => 
    array (
      'title' => 'Page Builder',
      'text' => 'Modulus supports Page Builder. All our shortcodes can be used as widgets too. You can drag and drop our widgets with page builder visual editor.',
      'icon' => 'fa-plus',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 4,
        'cell' => 1,
        'id' => 9,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    10 => 
    array (
      'title' => 'Page Layout',
      'text' => 'Modulus offers many different page layouts so you can quickly and easily create your pages with no hassle!',
      'icon' => 'fa-copy (alias)',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 4,
        'cell' => 2,
        'id' => 10,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    11 => 
    array (
      'title' => 'Custom Widget',
      'text' => 'We offer many custom widgets that are stylized and ready for use. Simply drag & drop into place to activate!',
      'icon' => 'fa-beer',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 5,
        'cell' => 0,
        'id' => 11,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    12 => 
    array (
      'title' => 'Shortcode Builder',
      'text' => 'Modulus includes lots of shortcodes, and our shortcode builder, users can easily build custom pages!',
      'icon' => 'fa-check-square',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 5,
        'cell' => 1,
        'id' => 12,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    13 => 
    array (
      'title' => 'Demo Content',
      'text' => 'Modulus includes demo content files. You can quickly setup the site like our demo and get started easily!',
      'icon' => 'fa-times',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 5,
        'cell' => 2,
        'id' => 13,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    14 => 
    array (
      'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
      'title' => 'Webulous Themes',
      'url' => 'http://www.webulousthemes.com',
      'anchor_text' => 'Purchase Now',
      'panels_info' => 
      array (
        'class' => 'Wbls_Cta_Widget',
        'raw' => false,
        'grid' => 6,
        'cell' => 0,
        'id' => 14,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    15 => 
    array (
      'title' => 'Customization',
      'text' => 'With advanced theme options, page options & extensive docs, its never been easier to customize a theme!',
      'icon' => 'fa-shopping-cart',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 7,
        'cell' => 0,
        'id' => 15,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    16 => 
    array (
      'title' => 'Testimonials',
      'text' => 'With our testimonial post type, shortcode and widget, Displaying testimonials is a breeze.',
      'icon' => 'fa-rocket',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 7,
        'cell' => 1,
        'id' => 16,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    17 => 
    array (
      'title' => 'Social Media',
      'text' => 'Want your users to stay in touch? No problem, Modulus has Social Media icons all throughout the theme!',
      'icon' => 'fa-copy (alias)',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 7,
        'cell' => 2,
        'id' => 17,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    18 => 
    array (
      'title' => 'Google Map',
      'text' => 'Modulus includes Goole Map as shortcode and widget. So, you can use it anywhere in your site!',
      'icon' => 'fa-map-marker',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 8,
        'cell' => 0,
        'id' => 18,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    19 => 
    array (
      'title' => 'Multiple Portfolio',
      'text' => '7 portfolio layouts, 3 blog layouts and multiple other alternate layouts for interior pages!',
      'icon' => 'fa-list-alt',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 8,
        'cell' => 1,
        'id' => 19,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    20 => 
    array (
      'title' => 'Multiple Sidebar',
      'text' => 'Unlimited sidebars allow you to create custom sidebars that match the style and layout of pages!',
      'icon' => 'fa-columns',
      'icon_background_color' => '',
      'icon_size' => '3x',
      'icon_placement' => 'top',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_Icon_Widget',
        'raw' => false,
        'grid' => 8,
        'cell' => 2,
        'id' => 20,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    21 => 
    array (
      'slider' => 'home-clients',
      'type' => 'carousel',
      'panels_info' => 
      array (
        'class' => 'Wbls_FlexSlider_Widget',
        'raw' => false,
        'grid' => 9,
        'cell' => 0,
        'id' => 21,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    1 => 
    array (
      'cells' => 3,
      'style' => 
      array (
      ),
    ),
    2 => 
    array (
      'cells' => 3,
      'style' => 
      array (
      ),
    ),
    3 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    4 => 
    array (
      'cells' => 3,
      'style' => 
      array (
      ),
    ),
    5 => 
    array (
      'cells' => 3,
      'style' => 
      array (
      ),
    ),
    6 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    7 => 
    array (
      'cells' => 3,
      'style' => 
      array (
      ),
    ),
    8 => 
    array (
      'cells' => 3,
      'style' => 
      array (
      ),
    ),
    9 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 0.32140015910898989,
    ),
    2 => 
    array (
      'grid' => 1,
      'weight' => 0.34526650755768007,
    ),
    3 => 
    array (
      'grid' => 1,
      'weight' => 0.33333333333332998,
    ),
    4 => 
    array (
      'grid' => 2,
      'weight' => 0.33333333333333331,
    ),
    5 => 
    array (
      'grid' => 2,
      'weight' => 0.33333333333333331,
    ),
    6 => 
    array (
      'grid' => 2,
      'weight' => 0.33333333333333331,
    ),
    7 => 
    array (
      'grid' => 3,
      'weight' => 1,
    ),
    8 => 
    array (
      'grid' => 4,
      'weight' => 0.33333333333333331,
    ),
    9 => 
    array (
      'grid' => 4,
      'weight' => 0.33333333333333331,
    ),
    10 => 
    array (
      'grid' => 4,
      'weight' => 0.33333333333333331,
    ),
    11 => 
    array (
      'grid' => 5,
      'weight' => 0.33333333333333331,
    ),
    12 => 
    array (
      'grid' => 5,
      'weight' => 0.33333333333333331,
    ),
    13 => 
    array (
      'grid' => 5,
      'weight' => 0.33333333333333331,
    ),
    14 => 
    array (
      'grid' => 6,
      'weight' => 1,
    ),
    15 => 
    array (
      'grid' => 7,
      'weight' => 0.33333333333333331,
    ),
    16 => 
    array (
      'grid' => 7,
      'weight' => 0.33333333333333331,
    ),
    17 => 
    array (
      'grid' => 7,
      'weight' => 0.33333333333333331,
    ),
    18 => 
    array (
      'grid' => 8,
      'weight' => 0.33333333333333331,
    ),
    19 => 
    array (
      'grid' => 8,
      'weight' => 0.33333333333333331,
    ),
    20 => 
    array (
      'grid' => 8,
      'weight' => 0.33333333333333331,
    ),
    21 => 
    array (
      'grid' => 9,
      'weight' => 1,
    ),
    ),
  );

  $layouts['contact-us'] = array(
      'name' => __('Contact Us Page', 'wbls-modulus'),
      'description' => __( 'Pre Built layout for contact us page', 'wbls-modulus'),
      'widgets' => array(
          0 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'title' => 'Contact Us',
            'text' => 'Po Box CT16122 Colins Street West, Australia / 1(2)345 6782 , / <a href="mailto:info@gmail.com"> info@gmail.com</a>',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider contact-info',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => '',
            'text' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448190.25139036635!2d76.81055816501677!3d28.645153201805222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x52c2b7494e204dce!2sNew+Delhi%2C+Delhi+110001!5e0!3m2!1sen!2sin!4v1452153536643" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => true,
              'grid' => 1,
              'cell' => 0,
              'id' => 1,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          2 => 
          array (
            'title' => '',
            'text' => '[contact-form-7 id="387" title="Contact form-t"]',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => false,
              'grid' => 1,
              'cell' => 1,
              'id' => 2,
              'style' => 
              array (
                'class' => 'contact-form',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
            ),
          ),
          1 => 
          array (
            'cells' => 2,
            'style' => 
            array (
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
          1 => 
          array (
            'grid' => 1,
            'weight' => 0.62835820895521999,
          ),
          2 => 
          array (
            'grid' => 1,
            'weight' => 0.37164179104478001,
          ),
        ),
      ),
      'builder_id' => '5694a47035580',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' => 
        array (
          'background_image_attachment' => false,
          'background_display' => 'tile',
        ),
      ),
    ),
    1 => 
    array (
      'slider' => 'home-clients',
      'type' => 'carousel',
      'panels_info' => 
      array (
        'class' => 'Wbls_FlexSlider_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 0,
        'id' => 1,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    1 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout-carousel top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 1,
    ),
    ),
  );
  $layouts['faq'] = array (
    'name' => __('Faq Page', 'wbls-modulus'),
    'description' => __('Pre Built Layout for default faq page', 'wbls-modulus'),
    'widgets' =>  array(
       0 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'title' => 'Faq\'s',
            'text' => '[accordion_group][accordion title=" Suspendisse massa odio"]Ut at lacinia erat. Aliquam lacus ex, tristique vitae quam nec, egestas scelerisque elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc tempor quam eu posuere porttitor. Etiam quis lectus est. Morbi ac gravida odio. Aliquam efficitur nisl orci, ac vestibulum ipsum blandit id. Aliquam lacinia eget sapien nec pulvinar. Praesent nibh erat, imperdiet non ornare euismod, rutrum ut mi. Quisque et risus in dolor porttitor iaculis.Etiam eget lorem nisi. Duis neque tellus, ultricies at tortor ac, pharetra facilisis nisl. Nulla mi sapien, viverra at pharetra id, venenatis eu risus. Duis faucibus, erat vitae tincidunt venenatis, leo ex commodo urna, quis blandit ipsum metus at arcu. Integer nec faucibus sem, vitae molestie arcu  Etiam semper tortor arcu, volutpat consequat est convallis eu. Nulla posuere neque quis mi laoreet volutpat.[/accordion][accordion title=" Praesent condimentum metus mauris"]In id lectus sed justo rhoncus luctus. Praesent imperdiet, massa et cursus sollicitudin, nibh tellus ullamcorper magna, eu fringilla est mi id magna. Etiam elit ex, pulvinar quis vehicula vitae, molestie eget ante. In hac habitasse platea dictumst. Duis turpis risus, ultricies sit amet libero pharetra, vestibulum imperdiet nisi. Integer sapien orci, placerat eu pretium a, faucibus eget massa. Nam gravida nisi eget felis consectetur, nec vestibulum urna malesuada.Etiam eget lorem nisi. Duis neque tellus, ultricies at tortor ac, pharetra facilisis nisl. Nulla mi sapien, viverra at pharetra id, venenatis eu risus. Duis faucibus, erat vitae tincidunt venenatis, leo ex commodo urna, quis blandit ipsum metus at arcu.Etiam eget lorem nisi. Duis neque tellus, ultricies at tortor ac, pharetra facilisis nisl. Nulla mi sapien, viverra at pharetra id, venenatis eu risus. Duis faucibus, erat vitae tincidunt venenatis, leo ex commodo urna, quis blandit ipsum metus at arcu. Integer nec faucibus sem, vitae molestie arcu Integer nec faucibus sem, vitae molestie arcu. [/accordion][accordion title="Vivamus dignissim dolor fermentum."]Donec ornare scelerisque convallis. Integer at erat in dolor fringilla ornare ut vitae est. Vivamus vulputate bibendum ex ac pulvinar. Cras tincidunt lorem elementum, mollis felis ut, tristique ante. Cras mattis ante a metus dapibus, nec sollicitudin massa blandit. Sed eget augue eget leo elementum porta eu non augue. Aenean ac diam eget orci molestie eleifend id et ipsum. Quisque ac tellus ac ligula condimentum fermentum. Donec congue lorem nec pellentesque efficitur. Sed imperdiet molestie nibh efficitur feugiat. Mauris scelerisque et neque sed pellentesque. Vivamus finibus lectus ut erat bibendum bibendum. Etiam eget lorem nisi. Duis neque tellus, ultricies at tortor ac, pharetra facilisis nisl. Nulla mi sapien, viverra at pharetra id, venenatis eu risus. Duis faucibus, erat vitae tincidunt venenatis, leo ex commodo urna, quis blandit ipsum metus at arcu. Integer nec faucibus sem, vitae molestie arcu[/accordion][accordion title="Mauris auctor vulputate urna"]Aenean laoreet, dolor sit amet faucibus finibus, sem sem interdum velit, et egestas libero enim sit amet libero. Maecenas nec nisi ut nibh luctus lacinia eu id magna. Duis sed arcu ipsum. Sed dictum a nisi vel pellentesque. Maecenas semper posuere rhoncus. Sed consectetur nibh felis, quis porttitor velit gravida eget. Donec lectus dolor, tincidunt finibus quam vitae, vulputate gravida ipsum. Integer blandit velit ante, eu placerat ligula mollis eget. Suspendisse elit metus, mollis at vehicula in, venenatis ut purus. Integer mollis scelerisque est, at congue nisi aliquam quis. Nulla vitae purus id nisl cursus tempor. Integer nibh risus, feugiat nec dui sed, dapibus tincidunt tortor. Pellentesque porta scelerisque lorem, sit amet porta dui. Etiam eget lorem nisi. Duis neque tellus, ultricies at tortor ac, pharetra facilisis nisl. Nulla mi sapien, viverra at pharetra id, venenatis eu risus. Duis faucibus, erat vitae tincidunt venenatis, leo ex commodo urna, quis blandit ipsum metus at arcu. Integer nec faucibus sem, vitae molestie arcu [/accordion][accordion title="Praesent pulvinar pretium magna"] Sed dictum a nisi vel pellentesque. Maecenas semper posuere rhoncus. Sed consectetur nibh felis, quis porttitor velit gravida eget. Donec lectus dolor, tincidunt finibus quam vitae, vulputate gravida ipsum. Integer blandit velit ante, eu placerat ligula mollis eget. Suspendisse elit metus, mollis at vehicula in, venenatis ut purus. Integer mollis scelerisque est, at congue nisi aliquam quis. Nulla vitae purus id nisl cursus tempor. Integer nibh risus, feugiat nec dui sed, dapibus tincidunt tortor. Pellentesque porta scelerisque lorem, sit amet porta dui.Aenean laoreet, dolor sit amet faucibus finibus, sem sem interdum velit, et egestas libero enim sit amet libero. Maecenas nec nisi ut nibh luctus lacinia eu id magna. Duis sed arcu ipsum.Etiam eget lorem nisi. Duis neque tellus, ultricies at tortor ac, pharetra facilisis nisl. Nulla mi sapien, viverra at pharetra id, venenatis eu risus. Duis faucibus, erat vitae tincidunt venenatis, leo ex commodo urna, quis blandit ipsum metus at arcu. Integer nec faucibus sem, vitae molestie arcu  [/accordion][accordion title="Etiam eget lorem nisi Duis neque."] Maecenas nec nisi ut nibh luctus lacinia eu id magna. Duis sed arcu ipsum. Sed dictum a nisi vel pellentesque. Maecenas semper posuere rhoncus. Sed consectetur nibh felis, quis porttitor velit gravida eget. Donec lectus dolor, tincidunt finibus quam vitae, vulputate gravida ipsum. Integer blandit velit ante, eu placerat ligula mollis eget. Suspendisse elit metus, mollis at vehicula in, venenatis ut purus. Integer mollis scelerisque est, at congue nisi aliquam quis. Nulla vitae purus id nisl cursus tempor. Integer nibh risus, feugiat nec dui sed, dapibus tincidunt tortor. Pellentesque porta scelerisque lorem, sit amet porta dui.Aenean laoreet, dolor sit amet faucibus finibus, sem sem interdum velit, et egestas libero enim sit amet libero.Etiam eget lorem nisi. Duis neque tellus, ultricies at tortor ac, pharetra facilisis nisl. Nulla mi sapien, viverra at pharetra id, venenatis eu risus. Duis faucibus, erat vitae tincidunt venenatis, leo ex commodo urna, quis blandit ipsum metus at arcu. Integer nec faucibus sem, vitae molestie arcu  [/accordion][accordion title="Aliquam rutrum tortor quis ultrices ultricies."]In sodales tellus sed arcu euismod tempor. Curabitur fringilla nibh quis lorem interdum mattis. Vivamus ornare placerat tellus ut accumsan. Fusce rutrum faucibus varius. Nunc a ipsum sit amet arcu dapibus egestas ut ut lorem. Integer sagittis mi nec nisl condimentum congue. Cras venenatis a nibh ut placerat. Vivamus a mauris non quam pretium lobortis non ac odio. Praesent dapibus erat turpis, sodales aliquet justo consectetur eget. Nam mattis consectetur nunc nec dapibus. Nam malesuada, diam nec imperdiet luctus, lacus turpis facilisis dui, sed lobortis sem justo vitae odio. Sed tincidunt consectetur est eget sodales. In laoreet ligula id eros convallis, nec rutrum turpis tempor. [/accordion][accordion title="Curabitur rutrum vehicula enim et pulvinar."] Sed nec massa lorem. Phasellus ut tincidunt velit, id scelerisque lorem. Nullam nisl tortor, mollis ut massa in, dapibus tincidunt libero. Pellentesque pretium posuere turpis eget dignissim. Curabitur sapien lorem, feugiat et velit et, vehicula aliquet urna. Vivamus pellentesque lorem at urna suscipit, at vulputate est ultricies. Aliquam ultrices nec massa sed adipiscing. Pellentesque feugiat sodales tellus. Ut tempus aliquam felis, quis consequat nunc hendrerit eget. Praesent sollicitudin nunc eu sollicitudin placerat. Praesent dapibus erat turpis, sodales aliquet justo consectetur eget. Nam mattis consectetur nunc nec dapibus. Nam malesuada, diam nec imperdiet luctus, lacus turpis facilisis dui, sed lobortis sem justo vitae odio. Sed tincidunt consectetur est eget sodales. In laoreet ligula id eros convallis, nec rutrum turpis tempor. [/accordion][accordion title="Pellentesque iaculis vulputate blandit."]Aliquam non lacus in lacus aliquet blandit. Cras sodales nisi at ultrices malesuada. Donec sodales mattis cursus. Nam feugiat feugiat felis sit amet tincidunt. Sed ut augue vitae augue vestibulum pulvinar. Fusce commodo ultricies volutpat. Vivamus quis nulla porta, faucibus metus eu, tempus dolor. Ut sed faucibus mi, ac volutpat lectus. Morbi a rhoncus erat. Mauris et metus posuere, imperdiet urna at, congue risus. Nunc at ante sed ipsum porttitor scelerisque semper non libero. Vivamus feugiat nisl sit amet mi tristique dictum. Donec id magna facilisis, euismod sem bibendum, interdum lorem. Praesent dapibus erat turpis, sodales aliquet justo consectetur eget. Nam mattis consectetur nunc nec dapibus. Nam malesuada, diam nec imperdiet luctus, lacus turpis facilisis dui, sed lobortis sem justo vitae odio. Sed tincidunt consectetur est eget sodales. In laoreet ligula id eros convallis, nec rutrum turpis tempor. [/accordion][accordion title=" Vestibulum in mi mauris. Duis luctus dolor ante."]Fusce vehicula risus lorem, sed ultricies neque pellentesque at. Ut dapibus aliquam leo non cursus. Donec eros dui, fringilla vel lacinia id, tincidunt ac eros. Ut ultrices elit nec viverra adipiscing. Aliquam suscipit viverra luctus. Vivamus rhoncus molestie hendrerit. Aenean id lacinia odio. Nullam sit amet dui accumsan, ornare nisi at, ornare elit. Proin ut dolor risus. Cras quis pellentesque felis, at venenatis nibh. Quisque tincidunt id enim a aliquam. Praesent dapibus erat turpis, sodales aliquet justo consectetur eget. Nam mattis consectetur nunc nec dapibus. Nam malesuada, diam nec imperdiet luctus, lacus turpis facilisis dui, sed lobortis sem justo vitae odio. Sed tincidunt consectetur est eget sodales. In laoreet ligula id eros convallis, nec rutrum turpis tempor. [/accordion][/accordion_group]',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => true,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => 'title-divider',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 1,
            'style' => 
            array (
              'class' => '',
              'cell_class' => '',
              'row_css' => '',
              'bottom_margin' => '',
              'gutter' => '',
              'padding' => '',
              'row_stretch' => '',
              'background' => '',
              'background_image_attachment' => '0',
              'background_display' => 'tile',
              'border_color' => '',
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 1,
          ),
        ),
      ),
      'builder_id' => '5624ddaabdd5e',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'raw' => false,
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    1 => 
    array (
      'slider' => 'home-clients',
      'type' => 'carousel',
      'panels_info' => 
      array (
        'class' => 'Wbls_FlexSlider_Widget',
        'grid' => 1,
        'cell' => 0,
        'id' => 1,
        'style' => 
        array (
          'background_image_attachment' => false,
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    1 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 1,
    ),
    ),
    
  );
  $layouts['services'] = array (
    'name' => __('Services Page', 'wbls-modulus'),
    'description' => __('Pre Built Layout for services page', 'wbls-modulus'),
    'widgets' =>  array(
      0 => 
    array (
      'level' => '1',
      'type' => 'normal',
      'content' => 'Our Services',
      'panels_info' => 
      array (
        'class' => 'Wbls_Heading_Widget',
        'raw' => false,
        'grid' => 0,
        'cell' => 0,
        'id' => 0,
        'style' => 
        array (
          'class' => 'title-divider',
          'background_display' => 'tile',
        ),
      ),
    ),
    1 => 
    array (
      'type' => 'square',
      'title' => 'Responsive Layout',
      'text' => 'Modulus is fully responsive and can adapt to any screen size. Resize your browser window to view it!.',
      'icon' => 'fa-mobile',
      'icon_background_color' => '',
      'icon_size' => '2x',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_CircleIcon_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 0,
        'id' => 1,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    2 => 
    array (
      'type' => 'square',
      'title' => 'Awesome Slider',
      'text' => 'Modulus includes two types of slider. You can use both Flex and Elastic sliders anywhere in your site',
      'icon' => 'fa-random',
      'icon_background_color' => '',
      'icon_size' => '2x',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_CircleIcon_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 1,
        'id' => 2,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    3 => 
    array (
      'type' => 'square',
      'title' => 'Font Awesome',
      'text' => 'Font Awesome icons are fully integrated into the theme. Use them anywhere in your site in 6 different sizes!',
      'icon' => 'fa-flag',
      'icon_background_color' => '',
      'icon_size' => '2x',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_CircleIcon_Widget',
        'raw' => false,
        'grid' => 1,
        'cell' => 2,
        'id' => 3,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    4 => 
    array (
      'type' => 'square',
      'title' => 'Custom Widget',
      'text' => 'We offer many custom widgets that are stylized and ready for use. Simply drag & drop into place to activate!',
      'icon' => 'fa-beer',
      'icon_background_color' => '',
      'icon_size' => '2x',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_CircleIcon_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 0,
        'id' => 4,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    5 => 
    array (
      'type' => 'square',
      'title' => 'Shortcode Builder',
      'text' => 'Modulus inclues lots of shortcodes, and our shortcode builder, users can easily build custom pages!',
      'icon' => 'fa-check-square',
      'icon_background_color' => '',
      'icon_size' => '2x',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_CircleIcon_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 1,
        'id' => 5,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    6 => 
    array (
      'type' => 'square',
      'title' => 'Demo Content',
      'text' => 'Modulus includes demo content files. You can quickly setup the site like our demo and get started easily!',
      'icon' => 'fa-times',
      'icon_background_color' => '',
      'icon_size' => '2x',
      'more' => '',
      'more_url' => '',
      'box' => false,
      'all_linkable' => false,
      'panels_info' => 
      array (
        'class' => 'Wbls_CircleIcon_Widget',
        'raw' => false,
        'grid' => 2,
        'cell' => 2,
        'id' => 6,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    7 => 
    array (
      'panels_data' => 
      array (
        'widgets' => 
        array (
          0 => 
          array (
            'src' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/theme-brief-img.png',
            'href' => 'http://modulus.codinggeek.com/wp-content/uploads/2016/01/theme-brief-img.png',
            'panels_info' => 
            array (
              'class' => 'Wbls_Image_Widget',
              'raw' => false,
              'grid' => 0,
              'cell' => 0,
              'id' => 0,
              'style' => 
              array (
                'class' => '',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
          1 => 
          array (
            'title' => 'Modulus Themes',
            'text' => 'Nulla sodales odio ut enim viverra pretium. Sed pulvinar sodales libero, a lacinia felis efficitur eu. Donec pellentesque non velit at dignissim. In et ultricies enim. Mauris fermentum magna risus, facilisis auctor felis rhoncus consectetur. Morbi molestie libero sed nisl auctor, sit amet porttitor quam porta. Curabitur quis enim non justo consequat eleifend. Cras quis ex vel magna condimentum interdum sed vel dui.

Sed vel faucibus mi. Proin id vulputate lacus. Cras vestibulum augue quam, vitae malesuada mauris vehicula ut. Maecenas mollis dolor non arcu cursus, sit amet fermentum libero semper. Nam faucibus ornare posuere. Vestibulum auctor dignissim faucibus. Praesent pharetra congue aliquet. Aliquam egestas ut sapien non ornare. Mauris metus ante, vestibulum quis molestie vel, maximus quis arcu. ',
            'filter' => 'on',
            'panels_info' => 
            array (
              'class' => 'WP_Widget_Text',
              'raw' => false,
              'grid' => 0,
              'cell' => 1,
              'id' => 1,
              'style' => 
              array (
                'class' => 'title-divider-left head-font-size',
                'widget_css' => '',
                'padding' => '',
                'background' => '',
                'background_image_attachment' => '0',
                'background_display' => 'tile',
                'border_color' => '',
                'font_color' => '',
              ),
            ),
          ),
        ),
        'grids' => 
        array (
          0 => 
          array (
            'cells' => 2,
            'style' => 
            array (
              'class' => '',
              'cell_class' => '',
              'row_css' => '',
              'bottom_margin' => '',
              'gutter' => '',
              'padding' => '',
              'row_stretch' => '',
              'background' => '',
              'background_image_attachment' => '0',
              'background_display' => 'tile',
              'border_color' => '',
            ),
          ),
        ),
        'grid_cells' => 
        array (
          0 => 
          array (
            'grid' => 0,
            'weight' => 0.39962857441790761,
          ),
          1 => 
          array (
            'grid' => 0,
            'weight' => 0.60037142558209244,
          ),
        ),
      ),
      'builder_id' => '5694a71fd769f',
      'panels_info' => 
      array (
        'class' => 'SiteOrigin_Panels_Widgets_Layout',
        'grid' => 3,
        'cell' => 0,
        'id' => 7,
        'style' => 
        array (
          'background_image_attachment' => false,
          'background_display' => 'tile',
        ),
      ),
    ),
    8 => 
    array (
      'title' => 'Skills',
      'panels_info' => 
      array (
        'class' => 'Wbls_Skill_Widget',
        'raw' => false,
        'grid' => 4,
        'cell' => 0,
        'id' => 8,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
    9 => 
    array (
      'title' => 'Our Tabs',
      'text' => '[tabs_group type="normal"][tabs title="Graphics"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.[/tabs][tabs title="Web Design"] It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.[/tabs][tabs title="Word Press"]There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn’t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.[/tabs][/tabs_group]
',
      'filter' => false,
      'panels_info' => 
      array (
        'class' => 'WP_Widget_Text',
        'raw' => false,
        'grid' => 4,
        'cell' => 1,
        'id' => 9,
        'style' => 
        array (
          'class' => 'title-divider-left',
          'background_display' => 'tile',
        ),
      ),
    ),
    10 => 
    array (
      'slider' => 'home-clients',
      'type' => 'carousel',
      'panels_info' => 
      array (
        'class' => 'Wbls_FlexSlider_Widget',
        'raw' => false,
        'grid' => 5,
        'cell' => 0,
        'id' => 10,
        'style' => 
        array (
          'background_display' => 'tile',
        ),
      ),
    ),
  ),
  'grids' => 
  array (
    0 => 
    array (
      'cells' => 1,
      'style' => 
      array (
      ),
    ),
    1 => 
    array (
      'cells' => 3,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    2 => 
    array (
      'cells' => 3,
      'style' => 
      array (
        'background_display' => 'tile',
      ),
    ),
    3 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
    4 => 
    array (
      'cells' => 2,
      'style' => 
      array (
      ),
    ),
    5 => 
    array (
      'cells' => 1,
      'style' => 
      array (
        'class' => 'panel-row-style-full-width-layout top-curve-divider',
        'background_display' => 'tile',
      ),
    ),
  ),
  'grid_cells' => 
  array (
    0 => 
    array (
      'grid' => 0,
      'weight' => 1,
    ),
    1 => 
    array (
      'grid' => 1,
      'weight' => 0.33333333333333331,
    ),
    2 => 
    array (
      'grid' => 1,
      'weight' => 0.33333333333333331,
    ),
    3 => 
    array (
      'grid' => 1,
      'weight' => 0.33333333333333331,
    ),
    4 => 
    array (
      'grid' => 2,
      'weight' => 0.33333333333333331,
    ),
    5 => 
    array (
      'grid' => 2,
      'weight' => 0.33333333333333331,
    ),
    6 => 
    array (
      'grid' => 2,
      'weight' => 0.33333333333333331,
    ),
    7 => 
    array (
      'grid' => 3,
      'weight' => 1,
    ),
    8 => 
    array (
      'grid' => 4,
      'weight' => 0.5,
    ),
    9 => 
    array (
      'grid' => 4,
      'weight' => 0.5,
    ),
    10 => 
    array (
      'grid' => 5,
      'weight' => 1,
    ),
   ),
    
  );

  return $layouts;
}
}
add_filter('siteorigin_panels_prebuilt_layouts', 'webulous_prebuilt_page_layouts');



function wbls_modulus_panels_row_style_fields($fields) {  

    $modulus_animation_name = array(
        '' => __(' --- Default --- ', 'wbls-modulus'),
        'fadeInUpBig-animation' => __('fadeInUpBig-animation','wbls-modulus' ),
        'bigEntrance-animation' => __('bigEntrance-animation','wbls-modulus' ),
        'boingInUp-animation' => __('boingInUp-animation','wbls-modulus' ),
        'bounce-animation' => __('bounce-animation','wbls-modulus' ),
        'bounceInLeft-animation' => __('bounceInLeft-animation','wbls-modulus' ),
        'bounceInRight-animation' => __('bounceInRight-animation','wbls-modulus' ),
        'bounceInUp-animation' => __('bounceInUp-animation','wbls-modulus' ),
        'expandUp-animation' => __('expandUp-animation','wbls-modulus' ),
        'fade-animation' => __('fade-animation','wbls-modulus' ),
        'fadeIn-animation' => __('fadeIn-animation','wbls-modulus' ),
        'fadeInDown-animation' => __('fadeInDown-animation','wbls-modulus' ),
        'fadeInDownBig-animation' => __('fadeInDownBig-animation','wbls-modulus' ),
        'fadeInLeft-animation' => __('fadeInLeft-animation','wbls-modulus' ),
        'fadeInLeftBig-animation' => __('fadeInLeftBig-animation','wbls-modulus' ),
        'fadeInRight-animation' => __('fadeInRight-animation','wbls-modulus' ),
        'fadeInRightBig-animation' => __('fadeInRightBig-animation','wbls-modulus' ),
        'fadeInUp-animation' => __('fadeInUp-animation','wbls-modulus' ),
        'fadeInUpBig-animation' => __('fadeInUpBig-animation','wbls-modulus' ),
        'flip-animation' => __('flip-animation','wbls-modulus' ),
        'flipInX-animation' => __('flipInX-animation','wbls-modulus' ),
        'flipInY-animation' => __('flipInY-animation','wbls-modulus' ),
        'floating-animation' => __('floating-animation','wbls-modulus' ),
        'foolishIn-animation' => __('foolishIn-animation','wbls-modulus' ),
        'hatch-animation' => __('hatch-animation','wbls-modulus' ),
        'lightSpeedIn-animation' => __('lightSpeedIn-animation','wbls-modulus' ),
        'puffIn-animation' => __('puffIn-animation','wbls-modulus' ),
        'pullDown-animation' => __('pullDown-animation','wbls-modulus' ),
        'pullUp-animation' => __('pullUp-animation','wbls-modulus' ),
        'pulse-animation' => __('pulse-animation','wbls-modulus' ),
        'rollInLeft-animation' => __('rollInLeft-animation','wbls-modulus' ),
        'rollInRight-animation' => __('rollInRight-animation','wbls-modulus' ),
        'rotateIn-animation' => __('rotateIn-animation','wbls-modulus' ),
        'rotateInDownLeft-animation' => __('rotateInDownLeft-animation','wbls-modulus' ),
        'rotateInDownRight-animation' => __('rotateInDownRight-animation','wbls-modulus' ),
        'rotateInUpLeft-animation' => __('rotateInUpLeft-animation','wbls-modulus' ),
        'rotateInUpRight-animation' => __('rotateInUpRight-animation','wbls-modulus' ),
        'scale-down-animation' => __('scale-down-animation','wbls-modulus' ),
        'scale-up-animation' => __('scale-up-animation','wbls-modulus' ),
        'slide-bottom-animation' => __('slide-bottom-animation','wbls-modulus' ),
        'slide-left-animation' => __('slide-left-animation','wbls-modulus' ),
        'slide-right-animation' => __('slide-right-animation','wbls-modulus' ),
        'slide-top-animation' => __('slide-top-animation','wbls-modulus' ),
        'slideDown-animation' => __('slideDown-animation','wbls-modulus' ),
        'slideExpandUp-animation' => __('slideExpandUp-animation','wbls-modulus' ),
        'slideInDown-animation' => __('slideInDown-animation','wbls-modulus' ),
        'slideInLeft-animation' => __('bouslideInLeft-animation','wbls-modulus' ),
        'slideInRight-animation' => __('slideInRight-animation','wbls-modulus' ),
        'slideLeft-animation' => __('slideLeft-animation','wbls-modulus' ),
        'slideRight-animation' => __('slideRight-animation','wbls-modulus' ),
        'slideUp-animation' => __('slideUp-animation','wbls-modulus' ),
        'spaceInDown-animation' => __('spaceInDown-animation','wbls-modulus' ),
        'spaceInLeft-animation' => __('spaceInLeft-animation','wbls-modulus' ),
        'spaceInRight-animation' => __('spaceInRight-animation','wbls-modulus' ), 
        'spaceInUp-animation'  => __('spaceInUp-animation','wbls-modulus' ),
        'stretchLeft-animation' => __('stretchLeft-animation','wbls-modulus' ), 
        'stretchRight-animation'  => __('stretchRight-animation','wbls-modulus' ),
        'swap-animation'  => __('swap-animation','wbls-modulus' ),
        'swashIn-animation'  => __('swashIn-animation','wbls-modulus' ),
        'swing-animation'  => __('swing-animation','wbls-modulus' ),
        'tinDownIn-animation' => __('tinDownIn-animation','wbls-modulus' ), 
        'tinRightIn-animation'  => __('tinRightIn-animation','wbls-modulus' ),
        'tinUpIn-animation' => __('tinUpIn-animation','wbls-modulus' ), 
        'tossing-animation'  => __('tossing-animation','wbls-modulus' ),
        'twisterInDown-animation'  => __('twisterInDown-animation','wbls-modulus' ),
        'twisterInUp-animation' => __('twisterInUp-animation','wbls-modulus' ), 
        'wobble-animation' => __('wobble-animation','wbls-modulus' ),
        'zoomIn-animation' => __('zoomIn-animation','wbls-modulus' ),
    );

    $fields['animation_class'] = array(
            'name' => __('Animation Class', 'modulus'),
            'type' => 'select',
            'options' => $modulus_animation_name,
    );

    return $fields;
}

add_filter('siteorigin_panels_row_style_fields', 'wbls_modulus_panels_row_style_fields');
add_filter('siteorigin_panels_widget_style_fields', 'wbls_modulus_panels_row_style_fields');

function wbls_modulus_panels_panels_row_style_attributes( $attributes, $args ) {
  if( !empty( $args['animation_class'] ) ) {
      $attributes['class'][] =  $args['animation_class']; 
    }

    if( !empty( $args['class'] ) ) {
      $attributes['class'] = array_merge( $attributes['class'], explode(' ', $args['class']) );
    }
    return $attributes;
}
add_filter('siteorigin_panels_row_style_attributes', 'wbls_modulus_panels_panels_row_style_attributes', 10, 2);
add_filter('siteorigin_panels_widget_style_attributes', 'wbls_modulus_panels_panels_row_style_attributes', 10, 2);

function wbls_modulus_row_style_groups( $groups ) {
  $groups['theme'] = array(
      'name' => __('Animation', 'wbls-modulus'),
  );

  return $groups;
}

add_filter( 'siteorigin_panels_row_style_groups', 'wbls_modulus_row_style_groups' );
add_filter( 'siteorigin_panels_widget_style_groups', 'wbls_modulus_row_style_groups' );