/**
 * Gulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 */

module.exports = {
	general: {
		projectName: 'WordPressStarterTheme',
		projectFolder: './',
		projectURL: 'yourProjectURL.test',
	},
	// Source files
	src: {
		styleSource: ['./src/scss/style.scss'],
		styleRTLSource: ['./src/scss/style.scss'],
		stylePrintSource: ['./src/scss/print.scss'],
		styleEditorSource: ['./src/scss/style-editor.scss'],
		styleVendorsSource: ['./src/scss/vendors/vendors.scss'],
		jsSource: ['./src/js/**/*.js', '!./src/js/vendors/**'],
		jsVendorsSource: ['./src/js/vendors/*.js'],
		imgSource: ['./src/images/**/*.*'],
		svgSource: ['./src/images/*.svg'],
		potSource: ['./**/*.php'],
	},
	// Output folders
	dest: {
		styleDest: './',
		styleRTLDest: './',
		stylePrintDest: './',
		styleEditorDest: './assets/css/',
		styleVendorsDest: './assets/css/vendors/',
		jsDest: './assets/js/',
		jsVendorsDest: './assets/js/vendors/',
		imgDest: './assets/images/',
		svgDest: './assets/images/',
		potDest: './languages/',
	},
	// Watch these files
	watch: {
		styleFiles: ['./src/scss/**/*.scss', '!./src/scss/vendors/*.scss'],
		styleVendorsFiles: './src/scss/vendors/*.scss',
		jsFiles: ['./src/js/**/*.js', '!./src/js/vendors/**'],
		jsVendorsFiles: './src/js/vendors/*.js',
		imgFiles: './src/images/**/*.*',
		svgFiles: './src/images/*.svg',
		potFiles: './**/*.php',
	},
	// BrowserSync options
	bsConfig: {
		proxy: {
			target: 'https://www.yourProjectURL.test',
		},
		hostname: 'yourProjectURL.test',
		port: '8080',
		open: 'local',
		browserAutoOpen: false,
		injectChanges: true,
		ghostMode: {
			scroll: true,
			links: true,
			forms: true,
		},
		snippetOptions: {
			// Provide a custom Regex for inserting the snippet.
			rule: {
				match: /<\/body>/i,
				fn: function(snippet, match) {
					return snippet + match;
				},
			},
		},
		rewriteRules: [
			{
				match: /localhost:8080/g,
				fn: function(req, res, match) {
					return 'localhost:3000';
				},
			},
		],
	},
	// Del config
	cleanConfig: [
		'./languages',
		'./assets/**/*',
		'!./assets',
		'!./assets/js/html5shiv/**/*',
		'!./assets/js/html5shiv',
		'!./assets/js',
	],
	// Gulp-sass options
	sassConfig: {
		outputStyle: 'expanded', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'
		indentType: 'tab',
		indentWidth: '2',
	},
	// PostCSS-sorting options
	sortingConfig: {
		'properties-order': 'alphabetical',
	},
	// JS options
	scriptConfig: {
		jsOutputFilename: 'scripts', // Compiled JS custom file name. Default set to script i.e. scripts.js and scripts.min.js.
		jsVendorsOutputFilename: 'vendors', // Compiled vendors JS custom file name. Default set to vendors i.e. vendors.js and vendors.min.js.
	},
	// Translation options
	translationConfig: {
		textDomain: 'WordPressStarterTheme', // Your textdomain here.
		translationFile: 'WordPressStarterTheme.pot', // Name of the translation file.
		packageName: 'WordPress-Starter-Theme', // Package name.
		bugReport:
			'https://github.com/ArmandPhilippot/wordpress-starter-theme/issues', // Where can users report bugs.
		lastTranslator: 'Armand Philippot <contact@armandphilippot.com>', // Last translator Email ID.
		team: 'WordPressStarterTheme Team <contact@armandphilippot.com>', // Team's Email ID.
	},
	zipConfig: {
		zipFilename: 'WordPressStarterTheme.zip',
		zipSource: [
			'./**/*',
			'!./{node_modules,node_modules/**/*}',
			'!./gulpfile.js',
			'!./gulp.config.js',
			'!./package.json',
			'!./package-lock.json',
			'!./{src,src/**/*}',
			'!./**/*.map',
		],
		zipDest: './../',
	},
	// Browsers you care about for autoprefixing. Browserlist https://github.com/ai/browserslist
	// The following list is set as per WordPress requirements. Though, Feel free to change.
	BROWSERS_LIST: [
		'last 2 version',
		'> 1%',
		'ie >= 11',
		'last 1 Android versions',
		'last 1 ChromeAndroid versions',
		'last 2 Chrome versions',
		'last 2 Firefox versions',
		'last 2 Safari versions',
		'last 2 iOS versions',
		'last 2 Edge versions',
		'last 2 Opera versions',
	],
};
