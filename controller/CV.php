<?php
namespace Controller\Builder;
class Builder
{

   public function prepareHeader($content)
    {
        $content = strtolower($content);
        return str_replace(" ", "", $content);
    }

    public function prepareLabel($content)
    {
        return '<span style="color:' . 'blue' . '">' . $content . '</span>';
    }

   public function prepareContent($content)
    {
        $data = '';
        foreach ($content as $line) {
            $label = isset($line['label']) ? prepareLabel($line['label']) : '';
            switch ($line['type']) {
                case 'item':
                    $data .= $label . ': ' . implode(', ', $line['data']) . PHP_EOL;
                    break;
                case 'list':
                    unset($line['type']);
                    foreach ($line as $key => $value) {
                        $list = is_array($value) ? implode(', ', $value) : $value;
                        $data .= prepareLabel(ucfirst($key)) . ': ' . $list . PHP_EOL;
                    }
                    $data .= PHP_EOL;
                    break;
                default:
                    $label == '' ?
                        $data .= $line['data'] . PHP_EOL :
                        $data .= $label . ': ' . $line['data'] . PHP_EOL;
            }
        }

        return trim($data) . PHP_EOL . PHP_EOL;
    }



}
