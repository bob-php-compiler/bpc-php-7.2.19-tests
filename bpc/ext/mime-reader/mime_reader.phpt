--TEST--
mime_reader() tests
--SKIPIF--
<?php
    if (!getenv('MIME_READER_TESTS_DIR')) {
        echo 'skip MIME_READER_TESTS_DIR not set';
    }
?>
--FILE--
<?php

var_dump(mime_reader(''));
var_dump(mime_reader('not-exists-file'));
var_dump(mime_reader('bad-message'));

function print_result($result)
{
    foreach ($result['headers'] as $header => $content) {
        if ($header == 'subject' || $header == 'from' || $header == 'reply_to') {
            if ($content) {
                $result['headers'][$header] = md5($content);
            }
        } else if ($header == 'to' || $header == 'cc') {
            foreach ($content as $idx => $item) {
                $content[$idx] = md5($item);
            }
            $result['headers'][$header] = $content;
        }
    }
    if ($result['html']) {
        $result['html'] = md5($result['html']);
    }
    if ($result['text']) {
        $result['text'] = md5($result['text']);
    }
    foreach ($result['embed'] as $idx => $item) {
        $result['embed'][$idx]['content'] = md5($item['content']);
    }
    foreach ($result['atts'] as $idx => $item) {
        $result['atts'][$idx]['content'] = md5($item['content']);
    }
    print_r($result);
}

$dir = getenv('MIME_READER_TESTS_DIR') . '/';
$files = array(
    'Cc.eml',
    'Reply-To.eml',
    'content-location.mht',
    'multipart-mixed-alternative.eml',
    'multipart-mixed.eml',
    'multipart-related-alternative.eml',
    'multipart-related.mht',
    'text-html.eml',
    'text-plain.eml'
);
foreach ($files as $file) {
    echo "==$file==\n";
    print_result(mime_reader($dir . $file));
}

?>
--EXPECTF--
Warning: mime_reader(): : No such file or directory in %s on line %d
bool(false)

Warning: mime_reader(): not-exists-file: No such file or directory in %s on line %d
bool(false)

Warning: mime_reader(): parse message failed in %s on line %d
bool(false)
==Cc.eml==
Array
(
    [headers] => Array
        (
            [subject] => 3a7f331a8a95b0af10e561574c404b59
            [from] => d5e4b6094580c3bff782ffdb80f1afe7
            [date] => Fri, 23 Mar 2018 18:33:44 +0800
            [to] => Array
                (
                    [0] => 199ba2d50520f4336f3bc5c65c6de86f
                )

            [cc] => Array
                (
                    [0] => 03a32e31c0e85282103776799b9e4ee7
                    [1] => 10fcc522c228f14227e966500308d694
                )

        )

    [html] => 374875a2da9c3a0a191504d0b699b41f
    [text] => 64a9464b3084c0377db85dcb9348270c
    [embed] => Array
        (
        )

    [atts] => Array
        (
        )

)
==Reply-To.eml==
Array
(
    [headers] => Array
        (
            [subject] => 0f9043fbe62970a36cc9455dac047160
            [from] => e3cd33fce875c01621e316347e8ea21d
            [date] => Wed, 04 Apr 2018 09:25:37 +0800
            [to] => Array
                (
                    [0] => 001737fa264a05c17d67bc346b7069c3
                )

            [reply-to] => songzhiguo1@chngalaxy.com
        )

    [html] => 19fd64571a8841612d0a7eef4bceb446
    [text] => 
    [embed] => Array
        (
        )

    [atts] => Array
        (
        )

)
==content-location.mht==
Array
(
    [headers] => Array
        (
            [subject] => 5c46dfde90d27cf400999ded4049f356
            [from] => 248336101b461380a4b2391a7625493d
            [date] => Wed, 04 Apr 2018 02:49:24 +0000
        )

    [html] => 1f0baaa5d16835b9a78190b56fc27dd1
    [text] => 
    [embed] => Array
        (
        )

    [atts] => Array
        (
        )

)
==multipart-mixed-alternative.eml==
Array
(
    [headers] => Array
        (
            [subject] => d437674821760ed271df554962274736
            [from] => 3d967492cb80f45c242cd862a26d1b88
            [date] => Sat, 24 Mar 2018 11:46:24 +0800
            [to] => Array
                (
                    [0] => 7de33b404f0e0578c13e154afabbadd6
                )

        )

    [html] => 74f8b906429d2614ca5edc26b771e88d
    [text] => 85c997f753fdd99c22a332d7eacfb3a1
    [embed] => Array
        (
        )

    [atts] => Array
        (
            [0] => Array
                (
                    [filename] => get-file.jpg
                    [content] => c65f9337f0fe4dc128a9edebd2385ca7
                )

        )

)
==multipart-mixed.eml==
Array
(
    [headers] => Array
        (
            [subject] => 63f4318ecf42da2ded321221d448f7e1
            [from] => 6b263fbf984e303a4e86faa9b92d643e
            [date] => Mon, 10 Oct 2011 14:10:12 +0000
            [to] => Array
                (
                    [0] => 82fb47eaaea4dfffe72ff608e218682b
                )

            [reply-to] => anchunyang_01@sina.com
        )

    [html] => 067c6077964e02a1b31d11f54ade0353
    [text] => 
    [embed] => Array
        (
        )

    [atts] => Array
        (
            [0] => Array
                (
                    [filename] => resume.html
                    [content] => 067c6077964e02a1b31d11f54ade0353
                )

            [1] => Array
                (
                    [filename] => 18197995_0_81946.jpg
                    [content] => 13def65ba67244f48bc4b52c1df3d41a
                )

        )

)
==multipart-related-alternative.eml==
Array
(
    [headers] => Array
        (
            [subject] => 1a74d26415af36df933129b453ae131e
            [from] => f12edac2f29309d82cf4234150560f68
            [date] => Thu, 08 Mar 2018 16:10:21 +0800
            [to] => Array
                (
                    [0] => 2d0d102f2c74e2ebbb507b40911dd508
                    [1] => 60633f2891b5c01d259c987b4b24ec23
                )

        )

    [html] => 6bb37358adc5e168fcb1c1cb914196de
    [text] => 4ad505ad954d9515910dccab4b485049
    [embed] => Array
        (
            [0] => Array
                (
                    [content-id] => image003.jpg@01D3B6F7.E9C33C60
                    [type] => jpg
                    [content] => c6215c33dfeb7740d0f6d55ecb4b26a3
                )

            [1] => Array
                (
                    [content-id] => image004.jpg@01D3B6F7.F52052F0
                    [type] => jpg
                    [content] => 1e8b23cc2898e7d1482c9cede68c2623
                )

        )

    [atts] => Array
        (
        )

)
==multipart-related.mht==
Array
(
    [headers] => Array
        (
            [subject] => f1cefec9e2196c672a622347f1fbc325
            [from] => 800448492423defb83c2bb98b72d4c67
            [date] => Thu, 01 Jan 1970 00:00:00 +0000
        )

    [html] => 72834800e7d173c753a84991aaf7c636
    [text] => 
    [embed] => Array
        (
            [0] => Array
                (
                    [content-id] => 62f86ef6-8947-44ed-8211-8c1a21e37c4c
                    [type] => gif
                    [content] => ec6d37ced9fb22ffa17e8c152787b85f
                )

            [1] => Array
                (
                    [content-id] => 87bdbeef-54a6-451d-ba9d-d51688dc5835
                    [type] => gif
                    [content] => fc94fb0c3ed8a8f909dbc7630a0987ff
                )

            [2] => Array
                (
                    [content-id] => 6d857596-d01e-443e-a34e-cb00b10cf016
                    [type] => gif
                    [content] => 898e3fcddbc1ad1f2b6a230b725f774a
                )

            [3] => Array
                (
                    [content-id] => d9f61597-879d-4051-a99b-d96d1967cce3
                    [type] => gif
                    [content] => a84eddf0371ec094d3982fb259ab9173
                )

            [4] => Array
                (
                    [content-id] => 2f3cae84-80ba-49ea-b5fe-c6af4b5212a4
                    [type] => gif
                    [content] => a506fc6d14cb780be5996bb6ca1d19a7
                )

        )

    [atts] => Array
        (
        )

)
==text-html.eml==
Array
(
    [headers] => Array
        (
            [subject] => ac716b67bc76c206a38a82d2ffa693c8
            [from] => ab3767524441815a0375baab59434b82
            [date] => Mon, 17 Oct 2011 07:30:23 +0800
            [to] => Array
                (
                    [0] => 82fb47eaaea4dfffe72ff608e218682b
                )

        )

    [html] => 63711df560f5bea402a67392df9c0ce8
    [text] => 
    [embed] => Array
        (
        )

    [atts] => Array
        (
        )

)
==text-plain.eml==
Array
(
    [headers] => Array
        (
            [subject] => e0302c764fa110f5e40fa2632f495450
            [from] => cd16c04604d355d023a4fccf5667afcd
            [date] => Mon, 02 Apr 2018 14:35:55 +0800
            [to] => Array
                (
                    [0] => 4a9bc6388ad5c8f6a46369bf5b580267
                )

        )

    [html] => 
    [text] => 1b26a9777abf217ae7da801ee11e0892
    [embed] => Array
        (
        )

    [atts] => Array
        (
        )

)
