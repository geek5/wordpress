(function (api) {

    api.sectionConstructor['eventpress_import_section'] = api.Section.extend({

        // No events for this type of section.
        attachEvents: function () {
        },

        // Always make the section active.
        isContextuallyActive: function () {
            return true;
        }
    });

})(wp.customize);

jQuery(document).ready(function () {


});
