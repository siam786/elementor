<?php
class Test_Widget extends \Elementor\Widget_Base

{

    public function get_name()
    {
        return 'test';
    }

    public function get_title()
    {
        return __('test', 'devsiam');
    }

    public function get_icon()
    {
        return 'fa fa-code';
    }

    public function get_categories()
    {
        return ['general'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'title_section',
            [
                'label' => __('Title Area', 'devsiam'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
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
			$this->add_control(
				'hr',
				[
					'type'=>\Elementor\Controls_Manager::DIVIDER
				]
				);
				$this->end_controls_section();
			
				$this->start_controls_section(
					'link_section',
					[
						'label' => __('Enter your Link section', 'devsiam'),
						'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
					]
				);
		//link control
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
		$this->end_controls_section();

    }

		protected function render(){
			$settings = $this->get_settings_for_display();
			$title = $settings['title'];
			$description = $settings['description'];
			$link_url = $settings['link_url']['url'];
			$link_text = $settings['link_text'];
			$pra = $settings['pra'];
			?>
<h1><?php echo $title; ?></h1>
<p><?php echo $description; ?></p>
<a href="<?php echo $link_url;?>"><?php echo $link_text; ?></a>
<p><?php echo $pra;?></p>
<?php
	}

}