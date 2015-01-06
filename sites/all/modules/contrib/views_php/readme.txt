hack code file views_php_handler_field.inc dong 205

Code goc la: 

  function pre_render(&$values) {
    if (!empty($this->options['php_output'])) {
      $this->php_output_lamda_function = create_function('$view, $handler, &$static, $row, $data, $value', ' ?>' . $this->options['php_output'] . '<?php ');
    }
  }