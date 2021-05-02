<?php
class Test_Widget extends \Elementor\Widget_Base

{

    public function get_name()
    {
        return 'W3 Text';
    }

    public function get_title()
    {
        return __('W3 Text', 'devsiam');
    }

    public function get_icon()
    {
        return 'fa fa-pencil';
    }

    public function get_categories()
    {
        return ['basic'];
    }

    

    protected function _register_controls()
    {

        $this->start_controls_section(
            'title_section',
            [
                'label' => __('Heading Area', 'devsiam'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

       
        $this->add_control(
            'pragraph_alignment',
            [
                'label' => __( 'Pragraph Alignment', 'devsiame' ),
                'type' => \Elementor\Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'devsiame' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'devsiame' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'devsiame' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
                'selectors' => [
					'{{WRAPPER}} .heading' => 'text-align: {{VALUE}}',
				],
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Enter your name', 'devsiam'),
				'label_block'=>true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Enter your name', 'devsiame'),
            ]
        );
		$this->end_controls_section();
		
		$this->start_controls_section(
            'description_section',
            [
                'label' => __('Desciption Area', 'devsiam'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
		
        $this->add_control(
            'description',
            [
                'label' => __('Enter your description', 'devsiam'),
				'label_block'=>true,
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('Enter your description', 'devsiame'),
            ]
        );
        $this->add_control(
            'pra',
            [
                'label' => __('Enter your text', 'devsiam'),
				'label_block'=>true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Enter your TEXT', 'devsiame'),
            ]
        );
			// $this->add_control(
			// 	'hr',
			// 	[
			// 		'type'=>\Elementor\Controls_Manager::DIVIDER
			// 	]
			// 	);
            
				$this->end_controls_section();
			
				$this->start_controls_section(
					'link_section',
					[
						'label' => __('Enter your Link section', 'devsiam'),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
                
		// start link control
        $this->add_control(
            'link_url',
            [
                'label' => __('Enter your link URL', 'devsiam'),
				'label_block'=>true,
				'seperator'=>'after',
                'type' => \Elementor\Controls_Manager::URL,
                'placeholder' => __('Enter your link UR Here', 'devsiame'),
				'show_external'=>true,
            ]
        );
		//url control
        $this->add_control(
            'link_text',
            [
                'label' => __('Enter your Link Text', 'devsiam'),
				'label_block'=>true,
                'type' => \Elementor\Controls_Manager::TEXT,
                'placeholder' => __('Enter your Link Text', 'devsiame'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'link2_section',
            [
                'label' => __('Enter your Link2 section', 'devsiam'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        
// start link control


$this->end_controls_section();
        //end content section
		//style control tab
		$this->start_controls_section(
            'style_section',
            [
                'label' => __('Heading style', 'devsiam'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
		//add heading style

		//add controls
		$this->add_control(
            'heading_color',
            [
                'label' => __('Enter your heading color ', 'devsiam'),
				'label_block'=>true,
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .heading' => 'color: {{VALUE}}',
				],
            ]
        );

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'label' => __( 'Heding Typography', 'devsiam' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .heading',
			]
		);
        $this->end_controls_section();
        
        $this->start_controls_section(
            'des_section',
            [
                'label' => __('Description style', 'devsiam'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

		$this->add_control(
			'desc_style',
			[
				'label' => __( 'Description Style', 'devsiame' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'after',
			]
		);

		//add controls

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'desc_typography',
				'label' => __( 'Description Typography', 'devsiam' ),
				'scheme' => \Elementor\Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .desc',
			]
		);
		//add
		$this->add_control(
            'description_color',
            [
                'label' => __('Enter your description color ', 'devsiam'),
				'label_block'=>true,
                'type' => \Elementor\Controls_Manager::COLOR,
                'scheme' => [
					'type' => \Elementor\Scheme_Color::get_type(),
					'value' => \Elementor\Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .desc' => 'color: {{VALUE}}',
				],
            ]
        );
		$this->end_controls_section();
        

    }

		protected function render(){
			$settings = $this->get_settings_for_display();
			$title = $settings['title'];
            //echo '<div class="text-align:'.$settings['text_alignment'].' "></div>';
			$description = $settings['description'];
			$link_url = $settings['link_url']['url'];
			$link_text = $settings['link_text'];
			$pra = $settings['pra'];
			?>
<h1 class="heading"><?php echo $title; ?></h1>

<p class="desc"><?php echo $description; ?></p>
<a href="<?php echo $link_url;?>"><?php echo $link_text; ?></a>
<p><?php echo $pra;?></p>
<?php
	}



}