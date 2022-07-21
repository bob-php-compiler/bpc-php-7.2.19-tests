--TEST--
Test scws
--FILE--
<?php
ini_set('scws.default.charset', 'utf8');
ini_set('scws.default.fpath',   '/usr/local/scws/etc');

define ('SCWS_TEST_MULTI_SHORT',    0x01);
define ('SCWS_TEST_MULTI_DUALITY',  0x02);
define ('SCWS_TEST_MULTI_ZMAIN',    0x04);
define ('SCWS_TEST_MULTI_ZALL',     0x08);
define ('SCWS_TEST_MULTI_MASK',     0x0f);
define ('SCWS_TEST_IGNORE_SYMBOL',  0x10);
define ('SCWS_TEST_DUALITY',        0x20);

$testData = array(
    '大家好，我是马明练' => array(
        'result' => '大家 好 ， 我 是 马 明练',
        'top5'   => '大家',
        'option' => 0
    ),
    '结合成分子时' => array(
        'result' => '结合 成 分子 时',
        'top5'   => '分子 结合',
        'option' => 0
    ),
    '上海欣辰文化传播有限公司' => array(
        'result' => '上海 欣 辰 文化传播 有限公司',
        'top5'   => '文化传播 有限公司',
        'option' => 0
    ),
    '提高人民生活水平' => array(
        'result' => '提高 人民 生活 水平',
        'top5'   => '水平 提高 人民 生活',
        'option' => 0
    ),
    '奥巴马上台后中美关系如何变革' => array(
        'result' => '奥巴马 上台 后 中美关系 如何 变革',
        'top5'   => '中美关系 上台 变革 如何',
        'option' => 0
    ),
    '一九四九年，新中国成立了' => array(
        'result' => '一九四九年 ， 新中国 成立 了',
        'top5'   => '一九四九年 新中国 成立',
        'option' => 0
    ),
    '哪个人生下来就会算算术呢' => array(
        'result' => '哪个 人 生下 来 就 会 算 算术 呢',
        'top5'   => '生下 算术 哪个',
        'option' => 0
    ),
    '2008年中国网络游戏的实际销售收入达183.8亿元人民币，比2007年增长了76.6%' => array(
        'result' => '2008 年 中国 网络游戏 的 实际 销售 收入 达 183.8 亿 元 人民币 ， 比 2007 年 增长 了 76.6%',
        'top5'   => '实际 人民币 收入 增长 网络游戏',
        'option' => 0
    ),
    '你说的确实在理' => array(
        'result' => '你 说 的 确实 在理',
        'top5'   => '在理 确实',
        'option' => 0
    ),
    '圆周率的近似值为3.14！' => array(
        'result' => '圆周率 的 近似值 为 3.14',
        'top5'   => '近似值 圆周率 3.14',
        'option' => SCWS_TEST_IGNORE_SYMBOL,
    ),
    '中国的全称是中华人民共和国' => array(
        'result' => '中国 国 的 全称 称 是 中华人民共和国 中华 人民 共和国 华 人 民 国',
        'top5'   => '全称 中华 人民',
        'option' => SCWS_TEST_MULTI_SHORT | SCWS_TEST_MULTI_ZMAIN,
    ),
    '读到第三章，我也不知该说什么好了' => array(
        'result' => '读到 到 第三章 我也 也 不知 该 该说 说 什么 好 好了',
        'top5'   => '不知 第三章 什么',
        'option' => SCWS_TEST_DUALITY|SCWS_TEST_IGNORE_SYMBOL,
    ),
    '我家的IP是192.168.1.100，4年前就用了，型号是386AC90F' => array(
        'result' => '我家 的 IP 是 192 . 168 . 1 . 100 ， 4 年前 就 用 了 ， 型号 是 386 AC 90 90F',
        'top5'   => '型号 年前 我家 192 168',
        'option' => SCWS_TEST_MULTI_DUALITY,
    ),
    '管理制度，越南民主共和国' => array(
        'result' => '管理制度 管理 制度 ， 越南民主共和国 越南 民主 共和国',
        'top5'   => '管理制度 民主 制度 管理',
        'option' => SCWS_TEST_MULTI_SHORT | SCWS_TEST_MULTI_DUALITY,
    ),
    '李姚明' => array(
        'result' => '李姚明 李姚 姚明',
        'top5'   => '',
        'option' => SCWS_TEST_MULTI_SHORT | SCWS_TEST_MULTI_DUALITY,
    ),
    '李姚明' => array(
        'result' => '李 姚明',
        'top5'   => '',
        'option' => SCWS_TEST_MULTI_SHORT,
    ),
    '中华人民共和国' => array(
        'result' => '中华人民共和国 中华 人民 共和国',
        'top5'   => '中华 人民',
        'option' => SCWS_TEST_MULTI_SHORT | SCWS_TEST_MULTI_DUALITY,
    ),
);

echo "new and set charset,dict,rule\n";
$scws = scws_new();
var_dump($scws);
var_dump($scws->set_charset('utf8'));
var_dump($scws->set_dict(ini_get('scws.default.fpath') . '/dict.utf8.xdb'));
var_dump($scws->set_rule(ini_get('scws.default.fpath') . '/rules.utf8.ini'));

echo "\nsend_text, get_result, get_top5\n";
$success = 0;
$failure = 0;
$start   = 1;
foreach ($testData as $text => $data) {
    var_dump($scws->set_multi($data['option'] & SCWS_TEST_MULTI_MASK));
    var_dump($scws->set_ignore(($data['option'] & SCWS_TEST_IGNORE_SYMBOL) ? true : false));
    var_dump($scws->set_duality(($data['option'] & SCWS_TEST_DUALITY) ? true : false));
    var_dump($scws->send_text($text));

    $words = array();
    while ($result = $scws->get_result()) {
        foreach ($result as $tmp) {
            $words[] = $tmp['word'];
        }
    }

    $result2 = implode(' ', $words);
    if ($result2 === $data['result']) {
        echo "Test Result [$start] ... PASS!\n";
    } else {
        echo "Test Result [$start] ... FAILURE!\n";
        echo "----------------------------------------\n";
        echo "ORGINAL TEXT: $text\n";
        echo "EXPECTED RESULT: {$data['result']}\n";
        echo "ACTUAL RESULT: $result2\n";
        echo "----------------------------------------\n";
    }

    $top5  = $scws->get_tops(5, '~nr,ns');
    $words = array();
    foreach ($top5 as $tmp) {
        $words[] = $tmp['word'];
    }

    $result2 = implode(' ', $words);
    if ($result2 === $data['top5']) {
        echo "Test Top5   [$start] ... PASS!\n";
    } else {
        echo "Test Top5   [$start] ... FAILURE!\n";
        echo "----------------------------------------\n";
        echo "ORGINAL TEXT: $text\n";
        echo "EXPECTED RESULT: {$data['top5']}\n";
        echo "ACTUAL RESULT: $result2\n";
        echo "----------------------------------------\n";
    }

    $start++;
}

echo "\nclose\n";
var_dump($scws->close());
?>
--EXPECTF--
new and set charset,dict,rule
object(SimpleCWS)#%d (%d) {
  ["handle"]=>
  resource(%d) of type (scws handler)
}
bool(true)
bool(true)
bool(true)

send_text, get_result, get_top5
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [1] ... PASS!
Test Top5   [1] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [2] ... PASS!
Test Top5   [2] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [3] ... PASS!
Test Top5   [3] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [4] ... PASS!
Test Top5   [4] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [5] ... PASS!
Test Top5   [5] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [6] ... PASS!
Test Top5   [6] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [7] ... PASS!
Test Top5   [7] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [8] ... PASS!
Test Top5   [8] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [9] ... PASS!
Test Top5   [9] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [10] ... PASS!
Test Top5   [10] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [11] ... PASS!
Test Top5   [11] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [12] ... PASS!
Test Top5   [12] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [13] ... PASS!
Test Top5   [13] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [14] ... PASS!
Test Top5   [14] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [15] ... PASS!
Test Top5   [15] ... PASS!
bool(true)
bool(true)
bool(true)
bool(true)
Test Result [16] ... PASS!
Test Top5   [16] ... PASS!

close
bool(true)
