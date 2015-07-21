/**
 * Created by dggug on 2015/7/21.
 */
$(function () {
    $("[data-toggle='date-time']").datetimepicker({format: 'YYYY-MM-DD HH:mm:ss', sideBySide: true});
    $("[data-toggle='date']").datetimepicker({format: 'YYYY-MM-DD', sideBySide: true});
    $("[data-toggle='time']").datetimepicker({format: 'HH:mm:ss', sideBySide: true});
});