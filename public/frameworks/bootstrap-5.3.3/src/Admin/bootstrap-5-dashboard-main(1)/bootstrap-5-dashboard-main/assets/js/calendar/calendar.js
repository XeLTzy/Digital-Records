document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        handleWindowResize: true,
        contentHeight: "auto",
        fixedWeekCount: true,
        themeSystem: 'bootstrap5',
        showNonCurrentDates: false,
        height: "auto",
        expandRows: 'true',
        aspectRatio: "auto",
        slotMinTime: '06:00',
        slotMaxTime: '23:00',
        expandRows: true,
        navLinks: true,
        editable: true,
        customButtons: {
            myCustomButton: {
                text: '▼',
                click: function () {
                    $('#DashboardDatePicker').modal('show');
                }
            }
        },
        buttonText: {
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day',
            list: 'List'
        },
        headerToolbar: {
            start: 'dayGridMonth,timeGridWeek,timeGridDay,list',
            center: 'title myCustomButton',
            end: 'today prev,next'
        },
        footerToolbar: {
            start: 'dayGridMonth,timeGridWeek,timeGridDay,list',
            center: 'title myCustomButton',
            end: 'today prev,next'
        }
    });
    calendar.render();
    calendar.updateSize();

    var customButtons = document.querySelectorAll('.fc-myCustomButton-button');
    customButtons.forEach(function (button) {
        button.setAttribute('title', 'Select date');
    });

    // Add custom title text attribute to list view buttons 
    var customListview = document.querySelectorAll('.fc-list-button');
    customListview.forEach(function (listButton) {
        listButton.setAttribute('title', 'Event List');
    });

    // Handle apply button click
    document.getElementById('applyDateButton').addEventListener('click', function () {
        var selectedDate = document.getElementById('modalDateInput').value;
        if (selectedDate) {
            calendar.gotoDate(selectedDate);
        }
        $('#myModal').modal('hide');
    });

});