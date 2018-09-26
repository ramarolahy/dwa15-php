<?php
require 'includes/Form.php';

use DWA\Form;

class FormTest extends Form
{
    public $output = [];

    /*
     *
     */
    public function __construct($tests)
    {
        $testsFailed = 0;
        $testsCount = 0;
        foreach ($tests as $test) {
            $testsCount++;
            $value = $test[0];
            $expected = $test[2];
            $method = $test[1];

            if (strstr($method, ':')) {
                $explode = explode(':', $method);
                $method = $explode[0];
                $param = $explode[1];
                $results = $this->$method($value, $param);
            } else {
                $param = null;
                $results = $this->$method($value);
            }

            if ($results != $expected) {
                $testsFailed++;
                $this->output = array_merge($this->output, [
                    'Test failed',
                    'Value: ' . $value,
                    'Method: ' . $method,
                    'Param: ' . $param,
                    'Expected ' . $this->boolToString($expected) . ', got ' . $this->boolToString($results),
                ]);
            }

        }

        $this->output[] = $testsCount - $testsFailed.' out of '.$testsCount.' tests passed';
    }

    /*
     *
     */
    private function boolToString($boolVal)
    {
        return ($boolVal) ? 'true' : 'false';
    }
}
