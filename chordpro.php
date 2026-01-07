<?php

$config = [

	// replace these parentheticals with symbols wrapped in spans with font blah blah blah
	"parser" => [
		"preprocess" => [
			"all" => [
				[
					"target" => "(Bass)",
					"replace" => "<span font_desc=\"Unicode\">𝄢</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Slide Up)", // aka Glissando up
					"replace" => "<span font_desc=\"Unicode\">𝆱</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Slide Down)", // aka Glissando down
					"replace" => "<span font_desc=\"Unicode\">𝆲</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Slur)",
					"replace" => "<span font_desc=\"Unicode\">⌒</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Notes)",
					"replace" => "<span font_desc=\"Unicode\">🎶</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Intro)",
					"replace" => "<span font_desc=\"Unicode\">▶</span>",
					"flags" => "gi"
				],
				[
					"target" => "(End)",
					"replace" => "<span font_desc=\"Unicode\">🔚</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Turnaround)",
					"replace" => "<span font_desc=\"Unicode\">↩</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Guitar)",
					"replace" => "<span font_desc=\"Unicode\">🎸</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Up)",
					"replace" => "<span font_desc=\"Unicode\">▲</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Down)",
					"replace" => "<span font_desc=\"Unicode\">▼</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Right)",
					"replace" => "<span font_desc=\"Unicode\">▶</span>",
					"flags" => "gi"
				],
				[
					"target" => "(Left)",
					"replace" => "<span font_desc=\"Unicode\">◀</span>",
					"flags" => "gi"
				],
			]
		],
	],

	// I think this is the setting that allows lowercase for notes so they don't generate chord diagrams
	"settings" => [
		"notenames" => true
	],

	// We have to specify these or it'll flag every unrecognized meta piece
	"metadata" => [
		"keys" => [
			"title",
			"subtitle",
			"artist",
			"composer",
			"lyricist",
			"arranger",
			"album",
			"copyright",
			"year",
			"sorttitle",
			"ccli",
			"ccli_license",
			"footer",
			"key",
			"mode",
			"time",
			"tempo",
			"capo",
			"duration"
		],
		"strict" => true,
		"separator" => "; ",
		"autosplit" => true,
	],

	'chords' => [
		[
			"name"  => "Ab2",
			"base"  => 1,
			"frets" => [4, 1, 1, 1, 4, 4],
		],
		[
			"name"  => "A/C#",
			"base"  => 2,
			"frets" => [-1, 3, 1, 1, 1, 4],
		],
		[
			"name"  => "A/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 2, 2, 0],
		],
		[
			"name"  => "Asus/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 2, 3, 0],
		],
		[
			"name"  => "A/E",
			"base"  => 1,
			"frets" => [0, 0, 2, 2, 2, 0],
		],
		[
			"name"  => "A2",
			"base"  => 1,
			"frets" => [-1, 0, 2, 2, 0, 0],
		],
		[
			"name"  => "A5",
			"base"  => 1,
			"frets" => [-1, 0, 2, 2, -1, -1],
		],
		[
			"name"  => "A2/C#",
			"base"  => 1,
			"frets" => [-1, 3, 2, 2, 0, 0],
		],
		[
			"name"  => "A7sus",
			"base"  => 1,
			"frets" => [-1, 0, 2, 0, 3, 0],
		],
		[
			"name"  => "Amaj9",
			"base"  => 4,
			"frets" => [2, 1, 3, 1, 2, 1],
		],
		[
			"name"  => "A/B",
			"base"  => 1,
			"frets" => [-1, 2, 2, 2, 2, 0],
		],
		[
			"name"  => "Am11",
			"base"  => 3,
			"frets" => [3, 1, 3, 3, 1, 1],
		],
		[
			"name"  => "Am/C",
			"base"  => 1,
			"frets" => [-1, 3, 2, 2, 1, 0],
		],
		[
			"name"  => "Am/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 2, 1, 0],
		],
		[
			"name"  => "Am/G",
			"base"  => 1,
			"frets" => [3, 0, 2, 2, 1, 0],
		],
		[
			"name"  => "Bb2",
			"base"  => 1,
			"frets" => [-1, 1, 3, 3, 1, 1],
		],
		[
			"name"  => "Bb5",
			"base"  => 1,
			"frets" => [-1, 1, 3, 3, -1, -1],
		],
		[
			"name"  => "Bbm6",
			"base"  => 1,
			"frets" => [-1, 1, 3, 0, 2, 1],
		],
		[
			"name"  => "Bb/C",
			"base"  => 1,
			"frets" => [-1, 3, 0, 3, 3, 1],
		],
		[
			"name"  => "Bb/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 3, 3, 1],
		],
		[
			"name"  => "Bb/F",
			"base"  => 1,
			"frets" => [1, 1, 3, 3, 3, 1],
		],
		[
			"name"  => "B/A",
			"base"  => 2,
			"frets" => [4, 1, 2, 2, 2, -1],
		],
		[
			"name"  => "B/D#",
			"base"  => 1,
			"frets" => [-1, -1, 1, 4, 4, 2],
		],
		[
			"name"  => "B/F#",
			"base"  => 1,
			"frets" => [2, 2, 4, 4, 4, 2],
		],
		[
			"name"  => "B5",
			"base"  => 1,
			"frets" => [-1, 2, 4, 4, -1, -1],
		],
		[
			"name"  => "B7/F#",
			"base"  => 1,
			"frets" => [2, 0, 1, 2, 0, 2],
		],
		[
			"name"  => "Bm/D",
			"base"  => 4,
			"frets" => [-1, 2, 1, 4, 4, 4],
		],
		[
			"name"  => "Bm/E",
			"base"  => 1,
			"frets" => [-1, -1, 2, 4, 3, 2],
		],
		[
			"name"  => "Bm/F#",
			"base"  => 1,
			"frets" => [2, 2, 0, -1, -1, -1],
		],
		[
			"name"  => "Bm2",
			"base"  => 1,
			"frets" => [-1, 2, 0, 4, 2, 2],
		],
		[
			"name"  => "Bm7(4)",
			"base"  => 1,
			"frets" => [-1, 2, 0, 2, 3, 0],
		],
		[
			"name"  => "Bm9",
			"base"  => 1,
			"frets" => [-1, 2, 0, 2, 2, 2],
		],
		[
			"name"  => "Bm11",
			"base"  => 1,
			"frets" => [-1, 2, 0, 2, 0, 0],
		],
		[
			"name"  => "Bm(maj7)",
			"base"  => 1,
			"frets" => [-1, 1, 4, 4, 3, -1],
		],
		[
			"name"  => "Bm7/A",
			"base"  => 4,
			"frets" => [-1, 0, 0, 2, 0, 2],
		],
		[
			"name"  => "Bsus/D#",
			"base"  => 4,
			"frets" => [-1, 3, 1, 1, 2, 4],
		],
		[
			"name"  => "C/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 0, 1, 0],
		],
		[
			"name"  => "C/E",
			"base"  => 1,
			"frets" => [0, 3, 2, 0, 1, 0],
		],
		[
			"name"  => "C/F",
			"base"  => 1,
			"frets" => [-1, -1, 3, 0, 1, 0],
		],
		[
			"name"  => "C/G",
			"base"  => 3,
			"frets" => [1, 1, 3, 3, 3, 1],
		],
		[
			"name"  => "C/Bb",
			"base"  => 1,
			"frets" => [-1, 1, 2, 0, 1, 0],
		],
		[
			"name"  => "C2",
			"base"  => 1,
			"frets" => [-1, 3, 3, 0, 3, 3],
		],
		[
			"name"  => "C2(#4)",
			"base"  => 1,
			"frets" => [-1, 3, 0, 0, 3, 3],
		],
		[
			"name"  => "C2/E",
			"base"  => 1,
			"frets" => [0, 3, 0, 0, 3, 3],
		],
		[
			"name"  => "C5",
			"base"  => 3,
			"frets" => [-1, 1, 3, 3, -1, -1],
		],


		// These three are the same chord
		// I wish
		// I wish
		// something were different
		// but I can't say what
		// and I can't make it be
		// but here we are
		// one chord times three
		[
			"name"  => "C7sus",
			"base"  => 1,
			"frets" => [-1, 3, 3, 3, 1, 1],
		],
		[
			"name"  => "C7sus4",
			"base"  => 1,
			"frets" => [-1, 3, 3, 3, 1, 1],
		],
		[
			"name"  => "Cm7(4)", // aka C7sus4
			"base"  => 1,
			"frets" => [-1, 3, 3, 3, 1, 1],
		],



		[
			"name"  => "C7/G",
			"base"  => 3,
			"frets" => [1, 1, 3, 1, 3, 1],
		],
		[
			"name"  => "Cmaj9",
			"base"  => 1,
			"frets" => [-1, 3, 2, 4, 3, -1],
		],
		[
			"name"  => "Cm11",
			"base"  => 1,
			"frets" => [-1, 3, 1, 3, 1, 1],
		],
		[
			"name"  => "C#5",
			"base"  => 4,
			"frets" => [-1, 1, 3, 3, -1, -1],
		],
		[
			"name"  => "C#/B",
			"base"  => 1,
			"frets" => [-1, 2, 3, 1, 2, 1],
		],
		[
			"name"  => "C#/F#",
			"base"  => 1,
			"frets" => [-1, -1, 4, 1, 2, 1],
		],
		[
			"name"  => "C#m/E",
			"base"  => 1,
			"frets" => [-1, -1, 2, 1, 2, 0],
		],
		[
			"name"  => "C#m/F#",
			"base"  => 1,
			"frets" => [-1, -1, 1, 3, 2, 1],
		],
		[
			"name"  => "D2",
			"base"  => 1,
			"frets" => [-1, -1, 0, 2, 3, 0],
		],
		[
			"name"  => "D5",
			"base"  => 1,
			"frets" => [-1, -1, 0, 1, 2, 4],
		],
		[
			"name"  => "D5/B",
			"base"  => 1,
			"frets" => [-1, 2, 0, 2, 3, -1],
		],
		[
			"name"  => "D5/C#",
			"base"  => 3,
			"frets" => [-1, -1, -1, 4, 1, 3],
		],
		[
			"name"  => "D5/F#",
			"base"  => 1,
			"frets" => [2, 0, 0, 2, 3, -1],
		],
		[
			"name"  => "D5/G",
			"base"  => 1,
			"frets" => [3, 0, 0, 2, 3, -1],
		],
		[
			"name"  => "D7sus",
			"base"  => 1,
			"frets" => [-1, -1, 0, 0, 1, 3],
		],
		[
			"name"  => "D/A",
			"base"  => 1,
			"frets" => [-1, 0, 0, 2, 3, 2],
		],
		[
			"name"  => "Dsus/A",
			"base"  => 1,
			"frets" => [-1, 0, 0, 0, 2, 2],
		],
		[
			"name"  => "D/C",
			"base"  => 1,
			"frets" => [-1, 3, 0, 2, 3, 2],
		],
		[
			"name"  => "D/C#",
			"base"  => 1,
			"frets" => [-1, 4, 4, 2, 3, 2],
		],
		[
			"name"  => "D/E",
			"base"  => 1,
			"frets" => [0, 0, 0, 2, 3, 2],
		],
		[
			"name"  => "D/F#",
			"base"  => 1,
			"frets" => [2, 0, 0, 2, 3, 2],
		],
		[
			"name"  => "D/G",
			"base"  => 1,
			"frets" => [3, 0, 0, 2, 3, 2],
		],
		[
			"name"  => "Eb2",
			"base"  => 1,
			"frets" => [-1, -1, 1, 3, 4, 1],
		],
		[
			"name"  => "Eb/G",
			"base"  => 1,
			"frets" => [3, 1, 1, 0, -1, -1],
		],



		[
			"name"  => "E2",
			"base"  => 2,
			"frets" => [-1, -1, 1, 3, 4, 1],
		],
		[
			"name"  => "Esus2",
			"base"  => 2,
			"frets" => [-1, -1, 1, 3, 4, 1],
		],
		[
			"name"  => "Em2",
			"base"  => 2,
			"frets" => [-1, -1, 1, 3, 4, 1],
		],



		[
			"name"  => "E5",
			"base"  => 1,
			"frets" => [0, 2, 2, -1, -1, -1],
		],
		[
			"name"  => "E6",
			"base"  => 1,
			"frets" => [0, 2, 2, 1, 2, 0],
		],
		[
			"name"  => "E7sus",
			"base"  => 1,
			"frets" => [0, 0, 0, 2, 0, 0],
		],
		[
			"name"  => "E/A",
			"base"  => 1,
			"frets" => [-1, 0, 2, 1, 0, 0],
		],
		[
			"name"  => "E/B",
			"base"  => 1,
			"frets" => [-1, 2, 2, 1, 0, 0],
		],
		[
			"name"  => "E/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 1, 0, 0],
		],
		[
			"name"  => "E/D#",
			"base"  => 1,
			"frets" => [-1, -1, 1, 1, 0, 0],
		],
		[
			"name"  => "E/G#",
			"base"  => 1,
			"frets" => [-1, -1, 3, 1, 2, 4],
		],
		[
			"name"  => "Esus/A",
			"base"  => 1,
			"frets" => [-1, 0, 2, 2, 0, 0],
		],
		[
			"name"  => "Em9",
			"base"  => 1,
			"frets" => [0, 2, 0, 0, 0, 2],
		],
		[
			"name"  => "Em11",
			"base"  => 1,
			"frets" => [0, 0, 0, 0, 0, 2],
		],
		[
			"name"  => "Em/B",
			"base"  => 1,
			"frets" => [-1, 2, 2, 0, 0, 0],
		],
		[
			"name"  => "Em/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 0, 0, 0],
		],
		[
			"name"  => "F/A",
			"base"  => 1,
			"frets" => [-1, 0, 3, 2, 1, 1],
		],
		[
			"name"  => "F/C",
			"base"  => 1,
			"frets" => [-1, 3, 3, 2, 1, 1],
		],
		[
			"name"  => "F/Eb",
			"base"  => 1,
			"frets" => [-1, -1, 1, 2, 1, 1],
		],
		[
			"name"  => "F/G",
			"base"  => 1,
			"frets" => [3, 0, 3, 2, 1, 1],
		],
		[
			"name"  => "F2",
			"base"  => 1,
			"frets" => [1, 3, 3, 0, 1, 1],
		],
		[
			"name"  => "F5",
			"base"  => 1,
			"frets" => [1, 3, 3, -1, -1, -1],
		],
		[
			"name"  => "F7sus",
			"base"  => 1,
			"frets" => [1, 1, 1, 3, 1, 1],
		],
		[
			"name"  => "F7/A",
			"base"  => 1,
			"frets" => [-1, 0, 1, 2, 1, 1],
		],
		[
			"name"  => "Fmaj9",
			"base"  => 1,
			"frets" => [1, 0, 2, 0, 1, 0],
		],
		[
			"name"  => "F#5",
			"base"  => 1,
			"frets" => [2, 4, 4, -1, -1, -1],
		],
		[
			"name"  => "F#/A#",
			"base"  => 1,
			"frets" => [-1, 1, 4, 3, 2, 2],
		],
		[
			"name"  => "F#m/A",
			"base"  => 2,
			"frets" => [4, 3, 3, 1, 1, 1],
		],
		[
			"name"  => "F#m7/A",
			"base"  => 1,
			"frets" => [-1, 0, 2, 2, 2, 2],
		],
		[
			"name"  => "F#m/E",
			"base"  => 1,
			"frets" => [-1, -1, 2, 2, 2, 2],
		],
		[
			"name"  => "F#7/A#",
			"base"  => 1,
			"frets" => [-1, 1, 2, 3, 2, 2],
		],
		[
			"name"  => "F#7sus",
			"base"  => 1,
			"frets" => [2, 2, 2, 4, 2, 2],
		],
		[
			"name"  => "G/A",
			"base"  => 1,
			"frets" => [-1, 0, 0, 0, 0, 3],
		],
		[
			"name"  => "G/B",
			"base"  => 1,
			"frets" => [-1, 2, 0, 0, 3, 3],
		],
		[
			"name"  => "G/C",
			"base"  => 1,
			"frets" => [-1, 3, 0, 0, 0, 3],
		],
		[
			"name"  => "G/D",
			"base"  => 1,
			"frets" => [-1, -1, 0, 0, 0, 3],
		],
		[
			"name"  => "G/F",
			"base"  => 1,
			"frets" => [1, 2, 0, 0, 3, 3],
		],
		[
			"name"  => "G/F#",
			"base"  => 1,
			"frets" => [2, 2, 0, 0, 3, 3],
		],
		[
			"name"  => "G2",
			"base"  => 1,
			"frets" => [3, 0, 0, 0, 3, 3],
		],
		[
			"name"  => "Gsus2",
			"base"  => 1,
			"frets" => [3, 0, 0, 0, 3, 3],
		],
		[
			"name"  => "G2/B",
			"base"  => 1,
			"frets" => [-1, 2, 0, 2, 3, 3],
		],
		[
			"name"  => "G5",
			"base"  => 3,
			"frets" => [1, 3, 3, -1, -1, -1],
		],
		[
			"name"  => "G6",
			"base"  => 1,
			"frets" => [3, 2, 0, 0, 0, 0],
		],
		[
			"name"  => "G6/A",
			"base"  => 1,
			"frets" => [-1, 0, 0, 0, 0, 0],
		],
		[
			"name"  => "G7/B",
			"base"  => 1,
			"frets" => [-1, 2, 0, 0, 0, 1],
		],
		[
			"name"  => "Gm7/D",
			"base"  => 3,
			"frets" => [-1, 3, 1, 1, 1, 1],
		],
		[
			"name"  => "Gm/Bb",
			"base"  => 1,
			"frets" => [-1, 1, 0, 3, 3, 3],
		],
		[
			"name"  => "Gm9",
			"base"  => 3,
			"frets" => [1, 3, 1, 1, 1, 3],
		],
		// the holiest of all chords
		[
			"name"  => "Gsus",
			"base"  => 1,
			"frets" => [3, 3, 0, 0, 3, 3],
		],
		[
			"name"  => "Gsus4",
			"base"  => 1,
			"frets" => [3, 3, 0, 0, 3, 3],
		],
		[
			"name"  => "G#7/C",
			"base"  => 3,
			"frets" => [-1, 1, 2, 3, 2, 2],
		],
	],

	// export settings
	'pdf' => [
		"papersize" => "letter",
		"margintop"    =>  80,
		"marginbottom" =>  40,
		"marginleft"   =>  50,
		"marginright"  =>  50,
		"headspace"    =>  40,
		"footspace"    =>  20,

		"formats" => [
			// Titles/Footers.
	
			// Titles/footers have 3 parts, which are printed left,
			// centered and right.
			// For odd/even printing, the 1st background page is used
			// for left pages and the next page (if it exists) for right pages.
			// For even/odd printing, the order is reversed.
	
			// By default, a page has=>
			"default" => [
				// No title/subtitle.
				"title"     => [ "%{title}", "", "" ],
				"subtitle"  => [ "", "", "" ],
				// Footer is title -- page number.
				"footer"    => [ "", "%{page}", "" ],
				// Background page.
				"background" => "",
			],
			// The first page of a song has=>
			"title" => [
				// Title and subtitle.
				"title"     => [ "%{title}", "", "" ],
				"subtitle"  => [ "Key - %{key}%{mode| }%{mode}   %{time}   %{tempo|Tempo }%{tempo}   %{capo|Capo }%{capo}", "", "" ],
				// Footer with page number.
				"footer"    => [
				[ "", "%{ccli|CCLI Song # }%{ccli}", "" ],
				[ "", "%{artist}", "" ],
				],
				// Background page.
				"background" => "",
			],
			// The very first output page is slightly different=>
			"first" => [
				// It has title and subtitle, like normal 'first' pages.
				// But no footer.
				"footer"    => [
				[ "", "%{ccli|CCLI Song # }%{ccli}", "" ],
				[ "", "%{artist}", "" ],
				],
				// Background page.
				"background" => "",
			],
		],


		"fontdir"    => [
			"C:\\Windows\\Fonts"
		],


			
		"fontconfig" => [
			"times, serif" => [
				""            => "Times-Roman",
				"bold"        => "Times-Bold",
				"italic"      => "Times-Italic",
				"bolditalic"  => "Times-BoldItalic",
			],
			"Verdana" => [
				""            => "verdana.ttf",
				"bold"        => "verdanab.ttf",
				"italic"      => "verdanai.ttf",
				"bolditalic"  => "verdanaz.ttf",
			],

			// Two Segoe UI fonts
			// Segoe UI for emojies
			"Emoji" => [
				""            => "seguiemj.ttf",
				"bold"            => "seguiemj.ttf",
			],
			// Segoe UI for symbols
			"Unicode" => [
				""            => "Seguisym.ttf",
				"bold"            => "Seguisym.ttf",
			],
			// I wish all these unicode matters had been thought of
			// ages and ages ago
			// then maybe fallbacks would be in place already
			// we wouldn't have to coerce
			// things would be better

			"helvetica" => [
				""            => "Helvetica",
				"bold"        => "Helvetica-Bold",
				// Only helvetica uses oblique, use italic for all other fonts
				"oblique"     => "Helvetica-Oblique",
				"boldoblique" => "Helvetica-BoldOblique",
			],
			"sans, sans-serif" => [
				""            => "Helvetica",
				"bold"        => "Helvetica-Bold",
				"italic"      => "Helvetica-Oblique",
				"bolditalic"  => "Helvetica-BoldOblique",
			],
			"courier, mono, monospace" => [
				""            => "Courier",
				"bold"        => "Courier-Bold",
				"italic"      => "Courier-Italic",
				"bolditalic"  => "Courier-BoldItalic",
			],
			"dingbats" => [
				""            => "ZapfDingbats",
			],
		],

		// "fonts" maps output elements to fonts as defined in "fontconfig".
		// The elements can have a background colour associated.
		// Colours are "#RRGGBB" or predefined names like "black", "white",
		// and lots of others.
		// NOTE=> In the built-in config we use only "name" since that can
		// be overruled with user settings.

		"fonts" => [

			// Song title
			"title" => [
				"description" => "Verdana bold",
				"size" => 14
			],
			// I don't think I use this at all
			"subtitle" => [
				"description" => "Verdana bold",
				"size" => 8
			],

			// the gray box that says "Verse" or "Chorus"
			"comment" => [
				"description" => "Verdana bold",
				"size" => 10,
				"background" => "foreground-light",
			],
			// the left-side label of sections when we do it that way
			"label" => [
				"description" => "Verdana",
				"size" => 10,
			],

			// The text is the text is the text
			"text" => [
				"description" => "Verdana",
				"size" => 12,
			],

			// Superscript chords and annotations
			// Unfortunately, while chord font can be changed per-file
			// annotation font cannot
			"chord" => [
				"description" => "Verdana bold",
				"size" => 12
			],
			"annotation" => [
				"description" => "Verdana bold",
				"size" => 12
			],


			
			"chordfingers" => [
				"file" => "ChordProSymbols.ttf",   // do not change
				"numbercolor" => "background",
			],
			"comment_italic" => [
				"description" => "Verdana bold",
				"size" => 12,
			],
			"comment_box" => [
				"description" => "Verdana",
				"size" => 12,
				"frame" => 1
			],
			"tab" => [
				"description" => "Courier",
				"size" => 10
			],
			"toc" => [
				"description" => "Verdana",
				"size" => 11
			],
			"grid" => [
				"description" => "Verdana",
				"size" => 10
			],
		],

		// Always narrower, squeezing them together more and more
		// 10, 20, 30 on a line
		// All in hopes they're useful for someone
		// Someday
		"diagrams" => [
			"show"     =>  "bottom",
			"width"    =>  5.75,      // width of a cell
			"height"   =>  6,      // height of a cell
			"vcells"   =>  4,      // vertical cells
			"linewidth" => 0.1,    // fraction of cell width
			"nutwidth" =>  5,      // width (in linewidth) of the top nut
			"hspace"   =>  2.5,   // fraction of width
			"vspace"   =>  1,      // fraction of height
			"dotsize"  =>  0.8,    // fraction of a cell
			"barwidth" =>  0.8,    // fraction of a dot
			"fingers"  =>  true,   // show fingering if available (or "below")
		],

		// Wasted effort, what a shame
		"kbdiagrams" => [
			"show"     =>  "bottom", // or top, right, below, false
			"align"    =>  "left",   // or right, center, spread
			"width"    =>   4,     // of a single key
			"height"   =>  20,     // of the diagram
			"keys"     =>  14,     // or 7, 10, 14, 17, 21
			"base"     =>  "C",    // or "F"
			"linewidth" => 0.1,    // fraction of a single key width
			"pressed"  =>  "foreground-light",   // colour of a pressed key
			"hspace"   =>  2,   // horizontal space between, fraction of width
			"vspace"   =>  0.3,    // vertical space between, fraction of height
		],


	],

/*
	// Dear Richard,
	// if you ever give up on your dream of making these helpful for absolute beginners,
	// which I suspect you may have already,
	// and lust only for cleaner sheets of paper,
	// just add this terrible clause:

	"diagrams" => [
		"suppress" => ["A","B","C","D","E","F","G"],
	],
*/
];

echo json_encode($config, JSON_PRETTY_PRINT);

file_put_contents(__DIR__ . "/myconfig.json", json_encode($config, JSON_PRETTY_PRINT));

?>