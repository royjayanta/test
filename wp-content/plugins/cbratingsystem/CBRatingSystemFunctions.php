<?php

/**
 * Class CBRatingSystemFunctions
 */
class CBRatingSystemFunctions
{
    /**
     * @param $text
     * @param $path
     * @param array $options
     *
     * @return string
     */
    public static function cb_l($text, $path, array $options = array())
    {
        // Merge in defaults.
        $options += array(
            'attributes' => array(),
            'html'       => false,
        );
        if (isset($options['attributes']['title']) && strpos($options['attributes']['title'], '<') !== false) {

            $options['attributes']['title'] = strip_tags($options['attributes']['title']);
        }

        return '<a href="' . self::check_plain($path) . '"' . self::prepare_attributes($options['attributes']) . '>' . ($options['html'] ? $text : self::check_plain($text)) . '</a>';
    }

    /**
     * @param array $attributes
     *
     * @return string
     */

    public static function prepare_attributes(array $attributes = array())
    {

        foreach ($attributes as $attribute => &$data) {

            $data = implode(' ', (array)$data);
            $data = $attribute . '="' . self::check_plain($data) . '"';
        }

        return $attributes ? ' ' . implode(' ', $attributes) : '';
    }

    /**
     * @param $text
     *
     * @return string
     */
    public static function check_plain($text)
    {

        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }

    /**
     * @param $value
     *
     * @return array|string
     */
    public static function stripslashes_multiarray($value)
    {

        $value = is_array($value) ?
            array_map(array('CBRatingSystemFunctions', 'stripslashes_multiarray'), $value) :
            stripslashes($value);

        return $value;
    }

    /**
     * @param $string
     * @param int $size
     * @param string $readMoreText
     * @param string $wrapperClass
     *
     * @return array
     */

    public static function text_summary_mapper($string, $size = 200, $readMoreText = '...More', $wrapperClass = '')
    {

        $stringSize = strlen($string);
        $summury    = array();

        if ($stringSize <= ($size + 20)) {
            return array('summury' => $string);
        }

        $summury['summury'] = substr($string, 0, $size);
        $summury['rest']    = substr($string, -$size);

        return $summury;
    }

    /**
     * Function to display elapsed time
     *
     * @param $time
     *
     * @return string
     */
    public static function codeboxr_time_elapsed_string($time)
    {

        if (!is_numeric($time)) {

            $time = strtotime($time);
        }

        $periods        = array(__('second', 'cbratingsystem'), __('minute', 'cbratingsystem'), __('hour', 'cbratingsystem'), __('day', 'cbratingsystem'), __('week', 'cbratingsystem'), __('month', 'cbratingsystem'), __('year', 'cbratingsystem'), __('decade', 'cbratingsystem'), __('age', 'cbratingsystem'));
        $periods_plural = array(__('seconds', 'cbratingsystem'), __('minutes', 'cbratingsystem'), __('hours', 'cbratingsystem'), __('days', 'cbratingsystem'), __('weeks', 'cbratingsystem'), __('months', 'cbratingsystem'), __('years', 'cbratingsystem'), __('decades', 'cbratingsystem'), __('age', 'cbratingsystem'));
        $lengths        = array("60", "60", "24", "7", "4.35", "12", "10", "100");

        $now = time();

        $difference = $now - $time;

        if ($difference <= 10 && $difference >= 0) {

            return $tense = __('just now', 'cbratingsystem');

        } elseif ($difference > 0) {

            $tense = __('ago', 'cbratingsystem');

        } elseif ($difference < 0) {

            $tense = __('later', 'cbratingsystem');
        }

        for ($j = 0; $difference >= $lengths[$j] && $j < count($lengths) - 1; $j++) {
            $difference /= $lengths[$j];
        }

        $difference = round($difference);

        $period = ($difference > 1) ? $periods_plural[$j] : $periods[$j];

        return sprintf(_x('%s %s %s ', 'x interval ago', 'cbratingsystem'), $difference, $period, $tense);
    } //end of codeboxr_time_elapsed_string


    /**
     * @param $date
     *
     * @return bool|string
     */
    public static function get_calculated_date($date)
    {

        if (is_numeric($date)) {
            return date('Y-m-d H:i:s', strtotime("-$date days"));
        }
    }
}// end of class


