<?
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
    
    $to = COption::GetOptionString('main', 'email_from');

    $subject = $_POST['subject'];
    $message = $subject . ' с сайта ' . $_SERVER['HTTP_HOST'] . '<br><br>';

    foreach ($_POST as $key => $value)
    {
        if (!in_array($key, array('subject', 'check', 'time_from', 'time_by')) && $value != '')
        {
            $temp = str_replace('_', ' ', $key) . ': ' . $value;
            $message = $message . $temp . '<br>';
        }
    }

    $message = $message . 'Удобное время для звонка: ' . $_POST['time_from'] . ' - ' . $_POST['time_by'] . '<br>';

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type: text/html; charset=utf-8" . "\r\n";

    mail($to, $subject, $message, $headers);

    CModule::IncludeModule('highloadblock');

    $hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById(1)->fetch();
    $entity  = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();

    $fields = array(
        'UF_NAME' => $_POST['Имя'],
        'UF_PHONE' => $_POST['Телефон'],
        'UF_CITY' => $_POST['Город'],
        'UF_CREATED_AT' => date('d.m.Y H:i:s'),
        'UF_TIME_FROM' => $_POST['time_from'],
        'UF_TIME_BY' => $_POST['time_by']
    );

    $entity_data_class::add($fields);

    echo true;
}
?>