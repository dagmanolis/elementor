const ControlChooseView = require( 'elementor-controls/choose' );

export default class ControlPopoverStarterView extends ControlChooseView {
	ui() {
		const ui = ControlChooseView.prototype.ui.apply( this, arguments );

		ui.popoverToggle = '.elementor-control-popover-toggle-toggle';

		return ui;
	}

	events() {
		return _.extend( ControlChooseView.prototype.events.apply( this, arguments ), {
			'click @ui.popoverToggle': 'onPopoverToggleClick',
		} );
	}

	initialize( ...args ) {
		super.initialize( ...args );

		this.state = {};
	}

	onPopoverToggleClick() {
		this.$el.next( '.elementor-controls-popover' ).toggle();
	}

	getCommand() {
		return 'globals/typography';
	}

	createGlobalItemMarkup( textStyle ) {
		// This method is called without a parameter when the user clicks the "Add" button
		if ( ! textStyle ) {
			textStyle = this.getGlobalData();
		}

		textStyle.key = this.model.get( 'name' );

		const $textStylePreview = jQuery( '<div>', { class: 'e-global-preview e-global-text-style', 'data-elementor-global': JSON.stringify( textStyle ) } );

		$textStylePreview
			.html( textStyle.title )
			.css( this.buildPreviewItemCSS( textStyle.value ) );

		return $textStylePreview;
	}

	// TODO: REPLACE THIS PLACEHOLDER OBJECT WITH VALUES OF THE TYPOGRAPHY CONTROLS
	getGlobalData() {
		const dataMockup = this.getGlobalDataMockup();

		return {
			id: elementor.helpers.getUniqueID(),
			commandName: 'globals/typography',
			key: this.model.get( 'name' ),
			value: dataMockup,
		};
	}

	getGlobalDataMockup() {
		return {
			id: 'new-style',
			title: 'New Style',
			value: {
				fontFamily: 'Varela',
				fontSize: '34px',
				fontWeight: 'normal',
				transform: 'none',
				fontStyle: 'normal',
				textDecoration: 'none',
				lineHeight: 'inherit',
				letterSpacing: 'inherit',
			},
		};
	}

	getAddGlobalConfirmMessage() {
		const $message = jQuery( '<div>', { class: 'e-global-confirm-message' } ),
			$messageText = jQuery( '<div>' )
				.html( elementor.translate( 'global_typography_confirm_text' ) ),
			$inputWrapper = jQuery( '<div>', { class: 'e-global-confirm-input-wrapper' } ),
			$input = jQuery( '<input>', { type: 'text', name: 'global-name', placeholder: 'New Text Style' } )
				.val( 'New Text Style' );

		$inputWrapper.append( $input );

		$message.append( $messageText, $inputWrapper );

		return $message;
	}

	// TODO: REPLACE THIS PLACEHOLDER OBJECT WITH THE ACTUAL GLOBALS ONCE THEY EXIST
	async getGlobalsList() {
		/*return {
			primary: {
				name: 'Primary',
				value: 'globals/typography/primary',
				fontFamily: 'Varela',
				fontSize: '34px',
				fontWeight: 'normal',
				transform: 'none',
				fontStyle: 'normal',
				textDecoration: 'none',
				lineHeight: 'inherit',
				letterSpacing: 'inherit',
			},
			secondary: {
				name: 'Secondary',
				value: 'globals/typography/secondary',
				fontFamily: 'Varela',
				fontSize: '28px',
				fontWeight: 'normal',
				transform: 'none',
				fontStyle: 'normal',
				textDecoration: 'none',
				lineHeight: 'inherit',
				letterSpacing: 'inherit',
			},
			text: {
				name: 'Text',
				value: 'globals/typography/text',
				fontFamily: 'Varela',
				fontSize: '15px',
				fontWeight: 'normal',
				transform: 'none',
				fontStyle: 'normal',
				textDecoration: 'none',
				lineHeight: 'inherit',
				letterSpacing: 'inherit',
			},
			accent: {
				name: 'Accent',
				value: 'globals/typography/accent',
				fontFamily: 'Varela',
				fontSize: '12px',
				fontWeight: 'normal',
				transform: 'none',
				fontStyle: 'normal',
				textDecoration: 'none',
				lineHeight: 'inherit',
				letterSpacing: 'inherit',
			},
		};*/

		const result = await $e.data.get( 'globals/typography' );

		return result.data;
	}

	// TODO: Replace placeholders with real global colors
	buildGlobalsList( globalTextStyles ) {
		const $globalTypographyContainer = jQuery( '<div>', { class: 'e-global-previews-container' } );

		Object.values( globalTextStyles ).forEach( ( textStyle ) => {
			const $textStylePreview = this.createGlobalItemMarkup( textStyle );

			$globalTypographyContainer.append( $textStylePreview );
		} );

		return $globalTypographyContainer;
	}

	onAddGlobalButtonClick() {
		this.triggerMethod( 'addGlobalToList', this.getAddGlobalConfirmMessage() );
	}
}

ControlPopoverStarterView.onPasteStyle = ( control, clipboardValue ) => {
	return ! clipboardValue || clipboardValue === control.return_value;
};
