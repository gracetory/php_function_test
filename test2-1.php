<?php
/**
 * in_arrayとarray_key_existsの速度検証
 */
	// 変数準備
	$haystack = [];
	for ($i = 0; $i < 1000000; $i++) {
		$haystack[$i] = $i;
	}
	$needles = [];
	for ($i = 0; $i < 10000; $i++) {
		$needles[] = mt_rand(0, 1000000 - 1);
	}

	// 出力バッファ
	ob_start();

	// 時間測定開始
	$time_start = microtime(true);

	// 計測したい処理
	foreach ($needles as $needle) {
		if (in_array($needle, $haystack));
	}

	// 時間測定終了
	$time = microtime(true) - $time_start;

	// 出力バッファ削除して終了
	ob_end_clean();

	// 結果出力
	printf("%.3f 秒" . PHP_EOL, $time);
