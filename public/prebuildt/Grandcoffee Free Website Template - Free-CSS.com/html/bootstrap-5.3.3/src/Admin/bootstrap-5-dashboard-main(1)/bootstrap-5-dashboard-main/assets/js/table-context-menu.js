var selectedRowIndex = null;

// Show context menu on right-click
$('#PatientRecordTable').on('contextmenu', function (e) {
    e.preventDefault(); // Prevent the default context menu from appearing

    // Get the index of the clicked row
    var $row = $(e.target).closest('tr');
    selectedRowIndex = $row.index();

    $('#context-menu-PatientRecords').css({
        display: 'block',
        top: e.pageY + 'px',
        left: e.pageX + 'px'
    });
    return false; // Prevent the default context menu
});

// Hide context menu when clicking outside
$(document).on('click', function (e) {
    if (!$(e.target).closest('#context-menu-PatientRecords').length) {
        $('#context-menu-PatientRecords').hide();
    }
});

// Handle context menu item click
$('#context-menu-PatientRecords a').on('click', function () {
    var item = $(this).data('item');
    if (item === 'editPatientRecords') {
        if (selectedRowIndex !== null) {
            // Open the modal
            $('#UpdatePatientPersonalRecords').modal('show');

            // Populate the modal with the selected row data
            var selectedRow = data[selectedRowIndex];
            $('#UpdatePatientPersonalfirstName').val(selectedRow.first_name);
            $('#UpdatePatientPersonalmiddleName').val(selectedRow.middle_name);
            $('#UpdatePatientPersonallastName').val(selectedRow.last_name);
            $('#UpdatePatientPersonalsuffix').val(selectedRow.suffix);
            $('#UpdatePatientPersonalbirthday').val(selectedRow.birthday);
            $('#UpdatePatientPersonalage').val(selectedRow.age);
            $('#UpdatePatientPersonalregion').val(selectedRow.region);
            $('#UpdatePatientPersonalprovince').val(selectedRow.province);
            $('#UpdatePatientPersonalmunicipality').val(selectedRow.municipality);
            $('#UpdatePatientPersonalbarangay').val(selectedRow.barangay);
            $('#UpdatePatientPersonalstreetName').val(selectedRow.street_name);
            $('#UpdatePatientPersonalhouseNumber').val(selectedRow.house_number);
            $('#UpdatePatientPersonalcontactNumber').val(selectedRow.contact_number);
            $('#UpdatePatientPersonalEmail').val(selectedRow.email);
            $('#UpdatePatientPersonaldiscountId').val(selectedRow.pwd_senior_control_number);
        }
    }
    $('#context-menu-PatientRecords').hide();
});

// Update age automatically based on the birthday input
$('#UpdatePatientPersonalbirthday').on('change', function () {
    var birthday = $(this).val();
    var age = calculateAge(birthday);
    $('#UpdatePatientPersonalage').val(age);
});

// Save changes and update table data
$('#saveChangesPatientInformation').on('click', function () {
    if (selectedRowIndex !== null) {

        // Retrieve values from the form
        var firstName = $('#UpdatePatientPersonalfirstName').val();
        var middleName = $('#UpdatePatientPersonalmiddleName').val();
        var lastName = $('#UpdatePatientPersonallastName').val();
        var suffix = $('#UpdatePatientPersonalsuffix').val();
        var birthday = $('#UpdatePatientPersonalbirthday').val();
        var age = $('#UpdatePatientPersonalage').val(); // This should be updated automatically
        var region = $('#UpdatePatientPersonalregion').val();
        var province = $('#UpdatePatientPersonalprovince').val();
        var municipality = $('#UpdatePatientPersonalmunicipality').val();
        var barangay = $('#UpdatePatientPersonalbarangay').val();
        var streetName = $('#UpdatePatientPersonalstreetName').val();
        var houseNumber = $('#UpdatePatientPersonalhouseNumber').val();
        var contactNumber = $('#UpdatePatientPersonalcontactNumber').val();
        var UpdatedEmail = $('#UpdatePatientPersonalEmail').val();
        var discountId = $('#UpdatePatientPersonaldiscountId').val();

        // Update the data object
        data[selectedRowIndex].first_name = firstName;
        data[selectedRowIndex].middle_name = middleName;
        data[selectedRowIndex].last_name = lastName;
        data[selectedRowIndex].suffix = suffix;
        data[selectedRowIndex].birthday = birthday;
        data[selectedRowIndex].age = age;
        data[selectedRowIndex].region = region;
        data[selectedRowIndex].province = province;
        data[selectedRowIndex].municipality = municipality;
        data[selectedRowIndex].barangay = barangay;
        data[selectedRowIndex].street_name = streetName;
        data[selectedRowIndex].house_number = houseNumber;
        data[selectedRowIndex].full_address = `${houseNumber} ${streetName} ${barangay}, ${municipality}, ${province}, ${region}`;
        data[selectedRowIndex].contact_number = contactNumber;
        data[selectedRowIndex].email = UpdatedEmail;
        data[selectedRowIndex].pwd_senior_control_number = discountId;

        // Compute new full_name
        data[selectedRowIndex].full_name = `${firstName} ${middleName ? middleName + ' ' : ''}${lastName} ${suffix}`;

        // Update the table
        $('#PatientRecordTable').bootstrapTable('load', data);

        // Close the modal
        $('#UpdatePatientPersonalRecords').modal('hide');
    }
});

//Caculate Birthday automatically
function calculateAge(birthday) {
    const birthDate = new Date(birthday);
    const currentDate = new Date();
    let age = currentDate.getFullYear() - birthDate.getFullYear();

    // Adjust for months and days
    const m = currentDate.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && currentDate.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}