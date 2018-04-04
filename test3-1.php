<?php
/**
 * forとwhileの速度検証
 */
	// 出力バッファ
	ob_start();

	// 時間測定開始
	$time_start = microtime(true);

	// 計測したい処理
	for ($i = 0; $i < 100000000; $i++);

	// 時間測定終了
	$time = microtime(true) - $time_start;

	// 出力バッファ削除して終了
	ob_end_clean();

	// 結果出力
	printf("%.3f 秒" . PHP_EOL, $time);
