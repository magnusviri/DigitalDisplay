if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e5816d7ccbf0',
	'title' => 'Alert Details',
	'fields' => array(
		array(
			'key' => 'field_5e5816d34834d',
			'label' => 'Paragraph 1',
			'name' => 'paragraph_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e5817114834e',
			'label' => 'Paragraph 2',
			'name' => 'paragraph_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e5817144834f',
			'label' => 'Paragraph 3',
			'name' => 'paragraph_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e58171748350',
			'label' => 'Paragraph 4',
			'name' => 'paragraph_4',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'single-alert-post.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5e57c31620c74',
	'title' => 'Event Calendar Details',
	'fields' => array(
		array(
			'key' => 'field_5e583f5c2a969',
			'label' => 'Events Calendar Big Red Text',
			'name' => 'events_calendar_name',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e57c31d8a71d',
			'label' => 'Events Calendar Smaller White Text',
			'name' => 'events_calendar_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e57c3c03be8a',
			'label' => 'Events Calendar Location',
			'name' => 'events_calendar_location',
			'type' => 'select',
			'instructions' => 'If you need to add a location, email help@example.com.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Leave Blank' => 'Leave Blank',
				'Zoom Teleconference' => 'Zoom Teleconference',
				'Location' => 'Location',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5e580ac73a52d',
			'label' => 'Event Begins At',
			'name' => 'event_begins_at',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y g:i a',
			'return_format' => 'Y-m-d H:i:s',
			'first_day' => 0,
		),
		array(
			'key' => 'field_5e580af03a52e',
			'label' => 'Event Ends At',
			'name' => 'event_ends_at',
			'type' => 'date_time_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y g:i a',
			'return_format' => 'Y-m-d H:i:s',
			'first_day' => 0,
		),
		array(
			'key' => 'field_5e5813db490ea',
			'label' => 'Display Event Time',
			'name' => 'display_event_time',
			'type' => 'radio',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Yes' => 'Yes',
				'No' => 'No',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:events-calendar',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'single-presentation-post.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5e5705dc5031c',
	'title' => 'Notice Details',
	'fields' => array(
		array(
			'key' => 'field_5e5705e726bf2',
			'label' => 'Paragraph 1',
			'name' => 'paragraph_1',
			'type' => 'text',
			'instructions' => 'Largest text (leave blank if it\'s to big and you want a smaller size)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e5705f126bf3',
			'label' => 'Paragraph 2',
			'name' => 'paragraph_2',
			'type' => 'text',
			'instructions' => 'Large text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e5705fb26bf4',
			'label' => 'Paragraph 3',
			'name' => 'paragraph_3',
			'type' => 'text',
			'instructions' => 'Small text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e582332740fb',
			'label' => 'Paragraph 4',
			'name' => 'paragraph_4',
			'type' => 'text',
			'instructions' => 'Smallest text',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e57060426bf5',
			'label' => 'Cropped Image',
			'name' => 'cropped_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'single-notice-post.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5e56fe4a4c342',
	'title' => 'Presentation Details',
	'fields' => array(
		array(
			'key' => 'field_5e56fec0ac6d5',
			'label' => 'Type',
			'name' => 'type',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Leave Blank' => 'Leave Blank',
				'Brown Bag Seminar' => 'Brown Bag Seminar',
				'Discussion' => 'Discussion',
				'Dissertation Defense' => 'Dissertation Defense',
				'Thesis Defense' => 'Thesis Defense',
				'Thesis Defense for the Degree of Doctor of Philosophy' => 'Thesis Defense for the Degree of Doctor of Philosophy',
				'Thesis Defense for the Degree of Master of Science' => 'Thesis Defense for the Degree of Master of Science',
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5e5818780727f',
			'label' => 'Cropped Image',
			'name' => 'cropped_image',
			'type' => 'image',
			'instructions' => 'This image will only appear if there is one speaker.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5e56ff6d1234d',
			'label' => 'Title 1',
			'name' => 'title_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e56fe4f02cf8',
			'label' => 'Name 1',
			'name' => 'name_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e56ff5f1234c',
			'label' => 'Credentials 1',
			'name' => 'credentials_1',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e570427daa3a',
			'label' => 'Title 2',
			'name' => 'title_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e57040ddaa38',
			'label' => 'Name 2',
			'name' => 'name_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e570417daa39',
			'label' => 'Credentials 2',
			'name' => 'credentials_2',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e570436daa3d',
			'label' => 'Title 3',
			'name' => 'title_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e57042edaa3b',
			'label' => 'Name 3',
			'name' => 'name_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e570433daa3c',
			'label' => 'Credentials 3',
			'name' => 'credentials_3',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e5704ec74196',
			'label' => 'Text At Bottom',
			'name' => 'text_at_bottom',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'single-presentation-post.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5e56e96806a40',
	'title' => 'Main Slide Details',
	'fields' => array(
		array(
			'key' => 'field_5e56e9639f952',
			'label' => 'Slide Visible Start Date',
			'name' => 'start_date',
			'type' => 'date_time_picker',
			'instructions' => 'If left blank the slide will show immediately. This only affects the main slides, it does not affect the Events Calendar.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y g:i a',
			'return_format' => 'Y-m-d H:i:s',
			'first_day' => 0,
		),
		array(
			'key' => 'field_5e56ef672296f',
			'label' => 'Slide Visible End Date',
			'name' => 'end_date',
			'type' => 'date_time_picker',
			'instructions' => 'If left blank the slide will show forever. This only affects the main slides, it does not affect the Events Calendar.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y g:i a',
			'return_format' => 'Y-m-d H:i:s',
			'first_day' => 0,
		),
		array(
			'key' => 'field_5e5d4f2648727',
			'label' => 'Show Footer Messages?',
			'name' => 'show_footer_messages',
			'type' => 'radio',
			'instructions' => 'If yes, the slide height is 600 pixels. If no, the slide height is 720 pixels.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Yes' => 'Yes',
				'No' => 'No',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'default_value' => 'Yes',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'save_other_choice' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_category',
				'operator' => '==',
				'value' => 'category:slide',
			),
			array(
				'param' => 'post_template',
				'operator' => '!=',
				'value' => 'single-events-calendar-only-post.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5e55b3b73e50e',
	'title' => 'Academic Calendar Details',
	'fields' => array(
		array(
			'key' => 'field_5e55b3bb47370',
			'label' => 'Start Date',
			'name' => 'start_date',
			'type' => 'date_picker',
			'instructions' => 'This date only affects the Academic calendar, not the Events Calendar or the main slides.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y',
			'return_format' => 'm/d/Y',
			'first_day' => 0,
		),
		array(
			'key' => 'field_5e55b456350d0',
			'label' => 'End Date',
			'name' => 'end_date',
			'type' => 'date_picker',
			'instructions' => 'This date only affects the Academic calendar, not the Events Calendar or the main slides.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y',
			'return_format' => 'm/d/Y',
			'first_day' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'academic-calendar',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;