<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'font_path' => base_path('resources/fonts/'),
	'font_data' => [
		'tradegothic' => [
			'R'  => 'TradeGothic.ttf',    // regular font
			'B'  => 'TradeGothic-Bold.ttf',       // optional: bold font
			'I'  => 'TradeGothic-Oblique.ttf',     // optional: italic font
			'BI' => 'TradeGothic-BoldOblique.ttf' // optional: bold-italic font
		],
		'tradegothiccond' => [
			'R'  => 'TradeGothic-CondEighteen.ttf',    // regular font
			'B'  => 'TradeGothic-BoldCondTwenty.ttf',       // optional: bold font
			'I'  => 'TradeGothic-CondEighteenObl.ttf',     // optional: italic font
			'BI' => 'TradeGothic-BoldCondTwentyObl.ttf' // optional: bold-italic font
		]

		// ...add as many as you want.
	]
];
