( function( api ) {

	// Extends our custom "garden-lite" section.
	api.sectionConstructor['garden-lite'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );