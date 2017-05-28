<?php
var_dump($argv);

/**
 * __main__
 */
LightRiderBot::main($argv);

/**
 * Class LightRiderBot
 */
class LightRiderBot {

    private $settings;

    public function run()
    {
        $stdin = fopen('php://stdin', 'r');
        while( $line = fgets( $stdin) ) {

            if (strlen($line) == 0) {
                continue;
            }



            $direction = rand(0,3);
            $part = explode(" ", $line)[0];

            switch ($part)
            {
                case 'settings':
                    break;
                case 'update':
                    break;
            }


            if($part!== 'action')
            {
                error_log('Non Action: ' . print_r($line, true));
                continue;
            }

            switch($direction)
            {
                case 0:
                    error_log('chose up');
                    echo 'up' . PHP_EOL;
                    break;
                case 1:
                    error_log('chose down');
                    echo 'down' . PHP_EOL;
                    break;
                case 2:
                    error_log('chose left');
                    echo 'left' . PHP_EOL;
                    break;
                case 3:
                    error_log('chose right');
                    echo 'right' . PHP_EOL;
                    break;
                default:
                    error_log('chose none');
                    echo 'no_moves' . PHP_EOL;
                    break;
            }
        }

        fclose( $stdin );
    }

    /**
     *
     * @param $args
     */
    public static function main($args)
    {
        error_log(print_r($args, true));
        $temp = new self();
        $temp->run();
    }
}
?>