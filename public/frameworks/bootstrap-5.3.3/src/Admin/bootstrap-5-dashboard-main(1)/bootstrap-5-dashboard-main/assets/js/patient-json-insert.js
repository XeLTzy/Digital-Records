var $table = $('#PatientRecordTable')
var $button = $('#AddedPatientSubmit')

$(function () {
    var data = [
        {
            "full_name": "John Michael Smith Sr.",
            "first_name": "John",
            "middle_name": "Michael",
            "last_name": "Smith",
            "suffix": "Sr.",
            "birthday": "1980-05-12",
            "age": 44,
            "region": "Region 1",
            "province": "Illinois",
            "municipality": "Springfield",
            "barangay": "b1",
            "street_name": "Main St",
            "house_number": "123",
            "full_address": "123 Main St b1, Springfield, Illinois, Region 1",
            "contact_number": "555-1234",
            "pwd_senior_control_number": "SCN0012345",
            "email": "john.smith@example.com",
            "guardian_full_name": "James Michael Smith Jr.",
            "Sakit sa puso": ["No", ""],
            "High Blood": ["No", ""],
            "Low Blood": ["No", ""],
            "Stroke": ["No", ""],
            "Diabetic": ["No", ""],
            "Asthma": ["No", ""],
            "STD/HIV/AIDS/COVID 19": ["No", ""],
            "Lung Disease": ["No", ""],
            "Liver Disease": ["No", ""],
            "Stomach Ulcer/Gerd": ["No", ""],
            "Pregnant/Kasalukuyang may regla": ["No", ""],
            "On Contraceptives": ["No", ""],
            "Allergies (Gamot/Pagkain)": ["No", ""],
            "Other Disease/Incedent might be needed for us to be informed": ["No", ""],
            "Dahilan ng pagdental": [""],
            "Mga gamot ng nainom patungkol sa sakit ng ipin": [""],
            "Kailan pa nagsimula ang sira/Sakit at tuwing kailan nararamdaman": [""],
            "Sumasakit": "",
            "Nangingilo": "",
            "Smoker": "",
            "Pagdurugo": "",
            "Labis na pagdurugo ng nakaraang bunot o naging operasyon": ""
        },
        {
            "full_name": "Jane Elizabeth Doe",
            "first_name": "Jane",
            "middle_name": "Elizabeth",
            "last_name": "Doe",
            "suffix": "",
            "birthday": "1975-07-22",
            "age": 49,
            "region": "Region 2",
            "province": "Illinois",
            "municipality": "Springfield",
            "street_name": "Elm St",
            "house_number": "456",
            "full_address": "456 Elm St, Springfield, Illinois, Region 2",
            "contact_number": "555-5678",
            "pwd_senior_control_number": "PWD0023456",
            "email": "jane.doe@example.com",
            "guardian_full_name": "Michael Robert Doe",
            "Sakit sa puso": ["No", ""],
            "High Blood": ["No", ""],
            "Low Blood": ["No", ""],
            "Stroke": ["No", ""],
            "Diabetic": ["No", ""],
            "Asthma": ["No", ""],
            "STD/HIV/AIDS/COVID 19": ["No", ""],
            "Lung Disease": ["No", ""],
            "Liver Disease": ["No", ""],
            "Stomach Ulcer/Gerd": ["No", ""],
            "Pregnant/Kasalukuyang may regla": ["No", ""],
            "On Contraceptives": ["No", ""],
            "Allergies (Gamot/Pagkain)": ["No", ""],
            "Other Disease/Incedent might be needed for us to be informed": ["No", ""],
            "Dahilan ng pagdental": [""],
            "Mga gamot ng nainom patungkol sa sakit ng ipin": [""],
            "Kailan pa nagsimula ang sira/Sakit at tuwing kailan nararamdaman": [""],
            "Sumasakit": "",
            "Nangingilo": "",
            "Smoker": "",
            "Pagdurugo": "",
            "Labis na pagdurugo ng nakaraang bunot o naging operasyon": ""
        },
        {
            "full_name": "Robert James Johnson Jr.",
            "first_name": "Robert",
            "middle_name": "James",
            "last_name": "Johnson",
            "suffix": "Jr.",
            "birthday": "1950-02-18",
            "age": 74,
            "region": "Region 3",
            "province": "Illinois",
            "municipality": "Springfield",
            "street_name": "Oak St",
            "house_number": "789",
            "full_address": "789 Oak St, Springfield, Illinois, Region 3",
            "contact_number": "555-6789",
            "pwd_senior_control_number": "SCN0034567",
            "email": "robert.johnson@example.com",
            "guardian_full_name": "James Robert Johnson",
            "Sakit sa puso": ["No", ""],
            "High Blood": ["No", ""],
            "Low Blood": ["No", ""],
            "Stroke": ["No", ""],
            "Diabetic": ["No", ""],
            "Asthma": ["No", ""],
            "STD/HIV/AIDS/COVID 19": ["No", ""],
            "Lung Disease": ["No", ""],
            "Liver Disease": ["No", ""],
            "Stomach Ulcer/Gerd": ["No", ""],
            "Pregnant/Kasalukuyang may regla": ["No", ""],
            "On Contraceptives": ["No", ""],
            "Allergies (Gamot/Pagkain)": ["No", ""],
            "Other Disease/Incedent might be needed for us to be informed": ["No", ""],
            "Dahilan ng pagdental": [""],
            "Mga gamot ng nainom patungkol sa sakit ng ipin": [""],
            "Kailan pa nagsimula ang sira/Sakit at tuwing kailan nararamdaman": [""],
            "Sumasakit": "",
            "Nangingilo": "",
            "Smoker": "",
            "Pagdurugo": "",
            "Labis na pagdurugo ng nakaraang bunot o naging operasyon": ""
        }
    ]
    $table.bootstrapTable({ data: data })
})

const patientfirstname = document.getElementById('patientfirstname').value.trim().charAt(0).toUpperCase() + document.getElementById('patientfirstname').value.trim().slice(1).toLowerCase();
const patientmiddlename = document.getElementById('patientmiddlename').value.trim().charAt(0).toUpperCase() + document.getElementById('patientmiddlename').value.trim().slice(1).toLowerCase();
const patientlastname = document.getElementById('patientlastname').value.trim().charAt(0).toUpperCase() + document.getElementById('patientlastname').value.trim().slice(1).toLowerCase();
const patientsuffix = document.getElementById('patientsuffix').value.trim().toUpperCase();
const patientbirthday = document.getElementById('patientbirthday').value.trim();
const patientregion = document.getElementById('region-text').value.trim();
const patientprovince = document.getElementById('province-text').value.trim();
const patientcity = document.getElementById('city-text').value.trim();
const patientbarangay = document.getElementById('barangay-text').value.trim();
const streetname = document.getElementById('streetname').value.trim().charAt(0).toUpperCase() + document.getElementById('streetname').value.trim().slice(1).toLowerCase();
const housenumber = document.getElementById('housenumber').value.trim();
const contactnumber = document.getElementById('contactnumber').value.trim();
const email = document.getElementById('email').value.trim();
const discountid = document.getElementById('discountid').value.trim().toUpperCase();
const guardianfirstname = document.getElementById('guardianfirstname').value.trim().charAt(0).toUpperCase() + document.getElementById('guardianfirstname').value.trim().slice(1).toLowerCase();
const guardianmiddlename = document.getElementById('guardianmiddlename').value.trim().charAt(0).toUpperCase() + document.getElementById('guardianmiddlename').value.trim().slice(1).toLowerCase();
const guardianlastname = document.getElementById('guardianlastname').value.trim().charAt(0).toUpperCase() + document.getElementById('guardianlastname').value.trim().slice(1).toLowerCase();
const guardiansuffix = document.getElementById('guardiansuffix').value.trim().toUpperCase();

const getage = calculateAge(patientbirthday);

$(function () {
    $button.click(function () {
        $table.bootstrapTable('insertRow', {
            index: 1,
            row: {
                "full_name": `${patientfirstname} ${patientmiddlename} ${patientlastname} ${patientsuffix}`,
                "first_name": `${patientfirstname}`,
                "middle_name": `${patientmiddlename}`,
                "last_name": `${patientlastname}`,
                "suffix": `${patientsuffix}`,
                "birthday": `${patientbirthday}`,
                "age": `${getage}`,
                "region": `${patientregion}`,
                "province": `${patientprovince}`,
                "municipality": `${patientcity}`,
                "barangay": `${patientbarangay}`,
                "street_name": `${streetname}`,
                "house_number": `${housenumber}`,
                "full_address": `${housenumber} ${streetname} ${'St,'} ${patientbarangay}, ${patientcity}, ${patientregion}`,
                "contact_number": `${contactnumber}`,
                "pwd_senior_control_number": `${discountid}`,
                "email": `${email}`,
                "guardian_full_name": `${guardianfirstname} ${guardianmiddlename} ${guardianlastname} ${guardiansuffix}`,
                "guardian_firstname": `${guardianfirstname}`,
                "guardian_middlename": `${guardianmiddlename}`,
                "guardian_lastname": `${guardianlastname}`,
                "guardian_suffix": `${guardiansuffix}`
            }
        })
    })

    $PatientRecordTable.on('check.bs.PatientRecordTable', (event, row) => {
        console.log(JSON.stringify(row))
    })

})

function calculateAge(birthday) {
    const birthDate = new Date(birthday);
    const currentDate = new Date();
    let age = currentDate.getFullYear() - birthDate.getFullYear();

    // adjust for months and days
    const m = currentDate.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && currentDate.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}

var selectedRowIndex = null;

// default Show context menu on right-click
// $('#PatientRecordTable').on('contextmenu', function (e) {
//     e.preventDefault(); 

//     // Get the index of the clicked row
//     var $row = $(e.target).closest('tr');
//     selectedRowIndex = $row.index();

//     $('#context-menu-PatientRecords').css({
//         display: 'block',
//         top: e.pageY + 'px',
//         left: e.pageX + 'px'
//     });
//     return false;
// });

$('#PatientRecordTable').on('contextmenu', 'tbody tr', function (e) {
    e.preventDefault(); // Prevent the default context menu from appearing

    // Get the index of the clicked row relative to the data array
    selectedRowIndex = $(this).data('index'); // Bootstrap Table assigns a 'data-index' attribute to each row

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

// de fault Handle context menu item click
// $('#context-menu-PatientRecords a').on('click', function () {
//     var item = $(this).data('item');
//     if (item === 'editPatientRecords') {
//         if (selectedRowIndex !== null) {
            
//             $('#UpdatePatientPersonalRecords').modal('show');

//             var selectedRow = data[selectedRowIndex];
//             $('#UpdatePatientPersonalfirstName').val(selectedRow.first_name);
//             $('#UpdatePatientPersonalmiddleName').val(selectedRow.middle_name);
//             $('#UpdatePatientPersonallastName').val(selectedRow.last_name);
//             $('#UpdatePatientPersonalsuffix').val(selectedRow.suffix);
//             $('#UpdatePatientPersonalbirthday').val(selectedRow.birthday);
//             $('#UpdatePatientPersonalage').val(selectedRow.age);
//             $('#UpdatePatientPersonalregion').val(selectedRow.region);
//             $('#UpdatePatientPersonalprovince').val(selectedRow.province);
//             $('#UpdatePatientPersonalmunicipality').val(selectedRow.municipality);
//             $('#UpdatePatientPersonalbarangay').val(selectedRow.barangay);
//             $('#UpdatePatientPersonalstreetName').val(selectedRow.street_name);
//             $('#UpdatePatientPersonalhouseNumber').val(selectedRow.house_number);
//             $('#UpdatePatientPersonalcontactNumber').val(selectedRow.contact_number);
//             $('#UpdatePatientPersonalEmail').val(selectedRow.email);
//             $('#UpdatePatientPersonaldiscountId').val(selectedRow.pwd_senior_control_number);
//         }
//     }
//     $('#context-menu-PatientRecords').hide();
// });

$('#context-menu-PatientRecords a').on('click', function () {
    var item = $(this).data('item');
    if (item === 'editPatientRecords') {
        if (selectedRowIndex !== null) {
            // Open the modal
            $('#UpdatePatientPersonalRecords').modal('show');

            // Populate the modal with the selected row data
            var selectedRow = $table.bootstrapTable('getData')[selectedRowIndex]; // Get the correct row from the table data
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

$(document).ready(function() {
    // Event listener for Save Changes button
    $('#saveChangesButton').on('click', function() {
        // Gather data from the modal fields
        var updatedData = {
            first_name: $('#UpdatePatientPersonalfirstName').val(),
            middle_name: $('#UpdatePatientPersonalmiddleName').val(),
            last_name: $('#UpdatePatientPersonallastName').val(),
            suffix: $('#UpdatePatientPersonalsuffix').val(),
            birthday: $('#UpdatePatientPersonalbirthday').val(),
            age: $('#UpdatePatientPersonalage').val(),
            region: $('#UpdatePatientPersonalregion').val(),
            province: $('#UpdatePatientPersonalprovince').val(),
            municipality: $('#UpdatePatientPersonalmunicipality').val(),
            barangay: $('#UpdatePatientPersonalbarangay').val(),
            street_name: $('#UpdatePatientPersonalstreetName').val(),
            house_number: $('#UpdatePatientPersonalhouseNumber').val(),
            contact_number: $('#UpdatePatientPersonalcontactNumber').val(),
            email: $('#UpdatePatientPersonalEmail').val(),
            pwd_senior_control_number: $('#UpdatePatientPersonaldiscountId').val()
        };

        // Update the selected row in the table
        if (selectedRowIndex !== null) {
            // Use bootstrapTable's updateRow method
            $table.bootstrapTable('updateRow', {
                index: selectedRowIndex,
                row: updatedData
            });

            // Optionally, hide the modal
            $('#UpdatePatientPersonalRecords').modal('hide');
        } else {
            alert("No row selected for update!");
        }
    });
});


// Save changes and update table data
// $('#saveChangesPatientInformation').on('click', function () {
//     if (selectedRowIndex !== null) {

//         // Retrieve values from the form
//         var firstName = $('#UpdatePatientPersonalfirstName').val();
//         var middleName = $('#UpdatePatientPersonalmiddleName').val();
//         var lastName = $('#UpdatePatientPersonallastName').val();
//         var suffix = $('#UpdatePatientPersonalsuffix').val();
//         var birthday = $('#UpdatePatientPersonalbirthday').val();
//         var age = $('#UpdatePatientPersonalage').val(); // This should be updated automatically
//         var region = $('#UpdatePatientPersonalregion').val();
//         var province = $('#UpdatePatientPersonalprovince').val();
//         var municipality = $('#UpdatePatientPersonalmunicipality').val();
//         var barangay = $('#UpdatePatientPersonalbarangay').val();
//         var streetName = $('#UpdatePatientPersonalstreetName').val();
//         var houseNumber = $('#UpdatePatientPersonalhouseNumber').val();
//         var contactNumber = $('#UpdatePatientPersonalcontactNumber').val();
//         var UpdatedEmail = $('#UpdatePatientPersonalEmail').val();
//         var discountId = $('#UpdatePatientPersonaldiscountId').val();

//         // Update the data object
//         data[selectedRowIndex].first_name = firstName;
//         data[selectedRowIndex].middle_name = middleName;
//         data[selectedRowIndex].last_name = lastName;
//         data[selectedRowIndex].suffix = suffix;
//         data[selectedRowIndex].birthday = birthday;
//         data[selectedRowIndex].age = age;
//         data[selectedRowIndex].region = region;
//         data[selectedRowIndex].province = province;
//         data[selectedRowIndex].municipality = municipality;
//         data[selectedRowIndex].barangay = barangay;
//         data[selectedRowIndex].street_name = streetName;
//         data[selectedRowIndex].house_number = houseNumber;
//         data[selectedRowIndex].full_address = `${houseNumber} ${streetName} ${barangay}, ${municipality}, ${province}, ${region}`;
//         data[selectedRowIndex].contact_number = contactNumber;
//         data[selectedRowIndex].email = UpdatedEmail;
//         data[selectedRowIndex].pwd_senior_control_number = discountId;

//         // Compute new full_name
//         data[selectedRowIndex].full_name = `${firstName} ${middleName ? middleName + ' ' : ''}${lastName} ${suffix}`;

//         // Update the table
//         $('#PatientRecordTable').bootstrapTable('load', data);

//         // Close the modal
//         $('#UpdatePatientPersonalRecords').modal('hide');
//     }
// });

//Caculate Birthday automatically
// function calculateAge(birthday) {
//     const birthDate = new Date(birthday);
//     const currentDate = new Date();
//     let age = currentDate.getFullYear() - birthDate.getFullYear();

//     // Adjust for months and days
//     const m = currentDate.getMonth() - birthDate.getMonth();
//     if (m < 0 || (m === 0 && currentDate.getDate() < birthDate.getDate())) {
//         age--;
//     }
//     return age;
// }