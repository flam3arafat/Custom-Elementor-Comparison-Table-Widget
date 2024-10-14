<?php
class Comparison_Table_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'comparison_table';
    }

    public function get_title() {
        return __( 'Comparison Table', 'text-domain' );
    }

    public function get_icon() {
        return 'eicon-table';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    protected function _register_controls() {
        // Content Controls
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'text-domain' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Table Headers
        $this->add_control(
            'header_features',
            [
                'label' => __( 'Header - Features', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Features', 'text-domain' ),
            ]
        );

        $this->add_control(
            'header_price',
            [
                'label' => __( 'Header - Lowest Price', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Lowest Price', 'text-domain' ),
            ]
        );

        $this->add_control(
            'header_domain',
            [
                'label' => __( 'Header - Domain', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Domain', 'text-domain' ),
            ]
        );

        $this->add_control(
            'header_issuance_time',
            [
                'label' => __( 'Header - Issuance Time', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Issuance Time', 'text-domain' ),
            ]
        );

        $this->add_control(
            'header_warranty',
            [
                'label' => __( 'Header - Warranty', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Warranty', 'text-domain' ),
            ]
        );

        $this->add_control(
            'header_action',
            [
                'label' => __( 'Header - Action', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Action', 'text-domain' ),
            ]
        );

        // Table Rows
        $this->add_control(
            'rows',
            [
                'label' => __( 'Table Rows', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => [
                    [
                        'name' => 'feature',
                        'label' => __( 'Feature', 'text-domain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Feature Name', 'text-domain' ),
                    ],
                    [
                        'name' => 'price',
                        'label' => __( 'Lowest Price', 'text-domain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( '৳ 8,125/yr', 'text-domain' ),
                    ],
                    [
                        'name' => 'domain',
                        'label' => __( 'Domain', 'text-domain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'Single', 'text-domain' ),
                    ],
                    [
                        'name' => 'issuance_time',
                        'label' => __( 'Issuance Time', 'text-domain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( '1-15 Days', 'text-domain' ),
                    ],
                    [
                        'name' => 'warranty',
                        'label' => __( 'Warranty', 'text-domain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( '$500,000', 'text-domain' ),
                    ],
                    [
                        'name' => 'button_text',
                        'label' => __( 'Button Text', 'text-domain' ),
                        'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => __( 'ORDER', 'text-domain' ),
                    ],
                    [
                        'name' => 'button_link',
                        'label' => __( 'Button Link', 'text-domain' ),
                        'type' => \Elementor\Controls_Manager::URL,
                        'placeholder' => __( 'https://your-link.com', 'text-domain' ),
                    ],
                ],
                'title_field' => '{{{ feature }}} | {{{ price }}}',
            ]
        );

        $this->end_controls_section();

        // Style Controls
        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style', 'text-domain' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        // Font Control for Headers
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'header_typography',
                'label' => __( 'Header Typography', 'text-domain' ),
                'selector' => '{{WRAPPER}} .comparison-table thead th',
            ]
        );

        // Font Control for Rows
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'row_typography',
                'label' => __( 'Row Typography', 'text-domain' ),
                'selector' => '{{WRAPPER}} .comparison-table tbody td',
            ]
        );

        // Header Background Color
        $this->add_control(
            'header_background_color',
            [
                'label' => __( 'Header Background Color', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .comparison-table thead th' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        // Button Background Color
        $this->add_control(
            'button_background_color',
            [
                'label' => __( 'Button Background Color', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .comparison-table .order-button' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        // Padding Control
        $this->add_responsive_control(
            'table_padding',
            [
                'label' => __( 'Table Padding', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .comparison-table' => 'padding: {{TOP}} {{RIGHT}} {{BOTTOM}} {{LEFT}};',
                ],
            ]
        );

        // Margin Control
        $this->add_responsive_control(
            'table_margin',
            [
                'label' => __( 'Table Margin', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .comparison-table' => 'margin: {{TOP}} {{RIGHT}} {{BOTTOM}} {{LEFT}};',
                ],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo '<div class="comparison-table-wrapper" style="overflow-x: auto;">'; // Wrapper for scrolling
        echo '<table class="comparison-table" style="width: 100%; border-collapse: collapse;">';
        echo '<thead>';
        echo '<tr style="background-color: #2E1A47; color: #fff;">';
        echo '<th>' . esc_html( $settings['header_features'] ) . '</th>';
        echo '<th>' . esc_html( $settings['header_price'] ) . '</th>';
        echo '<th>' . esc_html( $settings['header_domain'] ) . '</th>';
        echo '<th>' . esc_html( $settings['header_issuance_time'] ) . '</th>';
        echo '<th>' . esc_html( $settings['header_warranty'] ) . '</th>';
        echo '<th>' . esc_html( $settings['header_action'] ) . '</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ( $settings['rows'] as $row ) {
            echo '<tr style="border-bottom: 1px solid #ddd;">';
            echo '<td data-label="' . esc_html( $settings['header_features'] ) . '">' . esc_html( $row['feature'] ) . '</td>';
            echo '<td data-label="' . esc_html( $settings['header_price'] ) . '">' . esc_html( $row['price'] ) . '</td>';
            echo '<td data-label="' . esc_html( $settings['header_domain'] ) . '">' . esc_html( $row['domain'] ) . '</td>';
            echo '<td data-label="' . esc_html( $settings['header_issuance_time'] ) . '">' . esc_html( $row['issuance_time'] ) . '</td>';
            echo '<td data-label="' . esc_html( $settings['header_warranty'] ) . '">' . esc_html( $row['warranty'] ) . '</td>';
            if ( ! empty( $row['button_link']['url'] ) ) {
                echo '<td><a href="' . esc_url( $row['button_link']['url'] ) . '" class="order-button" target="_blank" style="padding: 10px 20px; background-color: #2E1A47; color: #fff; text-align: center; text-decoration: none; display: inline-block; border-radius: 3px;">' . esc_html( $row['button_text'] ) . '</a></td>';
            } else {
                echo '<td>' . esc_html( $row['button_text'] ) . '</td>';
            }
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>'; // Close the wrapper
    }
}

\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Comparison_Table_Widget() );

add_action('wp_head', function() {
    echo '<style>
        .comparison-table-wrapper {
            overflow-x: auto; /* Enable horizontal scrolling */
        }

        .comparison-table {
            min-width: 600px; /* Minimum width to prevent too much shrinkage */
            width: 100%; /* Full width for responsiveness */
        }

        .comparison-table th, .comparison-table td {
            padding: 10px; /* Add padding for better readability */
            text-align: left; /* Align text to the left */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .comparison-table {
                display: block; /* Allow block display */
            }

            .comparison-table thead {
                display: none; /* Hide headers */
            }

            .comparison-table tbody tr {
                display: block; /* Stack rows */
                margin-bottom: 10px; /* Spacing between rows */
            }

            .comparison-table td {
                display: flex; /* Flex display for alignment */
                justify-content: space-between; /* Align items to left */
                padding: 10px; /* Padding for readability */
                border: 1px solid #ddd; /* Border for separation */
            }

            .comparison-table td:before {
                content: attr(data-label); /* Use data-label for headers */
                font-weight: bold; /* Make labels bold */
                margin-right: 10px; /* Space between label and value */
            }
        }
    </style>';
});
