(function( factory ) {
	if ( typeof define === "function" && define.amd ) {
		define( ["jquery", "../jquery.validate"], factory );
	} else if (typeof module === "object" && module.exports) {
		module.exports = factory( require( "jquery" ) );
	} else {
		factory( jQuery );
	}
}(function( $ ) {

/*
 * Phone valid methods for the jQuery validation plugin.
 */
$.validator.addMethod( "phone", function( value, element ) {
	return this.optional(element) || /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\0-9]*$/.test(value);
}, $.validator.format( 'Please enter a valid phone number.' ) );
return $;
}));
