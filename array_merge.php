<?php
class ArrayMerge {
    public $index = 0;

    /**
     * init
     *
     * @return void
     */
    function init() {
        $this->index = 0;
    }
 
    /**
     * generateValues
     *
     * @param integer $count
     * @return array
     */
    function generateValues($count)
    {
        for ($i = 1; $i <= $count; $i++) $values[$i] = "test{$i}";
        return $values;
    }
 
    /**
     * generateValuesWithIndex
     *
     * @param integer $count
     * @return array
     */
    function generateValuesWithIndex($count)
    {
        for ($i = 1; $i <= $count; $i++) {
            $values[++$this->index] = "test{$i}";
        }
        return $values;
    }
 
    /**
     * display
     *
     * @param string $title
     * @param array $values
     * @return void
     */
    function display($title, $values) {
        echo($title).PHP_EOL;
        var_export($values);
        echo(PHP_EOL);
    }
}

$array_merge = new ArrayMerge();

//values same index
echo('-- Same Index').PHP_EOL;

//values
$values = $array_merge->generateValues(10);
$array_merge->display('$values', $values);

//values+=
$values+= $values;
$array_merge->display('$values+= $values(same index)', $values);

//values1 + values2
$values1 = $array_merge->generateValues(10);
$values2 = $array_merge->generateValues(10);
$values = $values1 + $values2;
$array_merge->display('$values1 + $values2(same index)', $values);

$values = array_merge($values1, $values2);
$array_merge->display('array_merge($values1, $values2) (same index)', $values);

//values diffrence index
echo('-- Diffrence Index').PHP_EOL;
$values1 = $array_merge->generateValuesWithIndex(10);
$values2 = $array_merge->generateValuesWithIndex(10);
$array_merge->display('$values1(diffrent index)', $values1);
$array_merge->display('$values2(diffrent index)', $values2);

$values = $values1 + $values2;
$array_merge->display('$values1 + $values2(diffrent index)', $values);

$values = array_merge($values1, $values2);
$array_merge->display('array_merge($values1, $values2) (diffrent index)', $values);