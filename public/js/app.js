$(document).ready(function () {
    // add student


    const getData = () => {
        $.ajax({
            url: "/get",
            type: "GET",
            success: (data) => {
                $("#student-data").html(data);
            }
        })
    }
    getData();
    const total = () => {
        $.ajax({
            url: "/total",
            type: "GET",
            success: (data) => {
                $("#total").html(data);
            }
        })
    }
    total();
    $("#create").on("click", function () {
        const username = $("#username").val();
        const age = $("#age").val();
        const country = $("#country").val();
        const _token = $("#_token").val();

        if (username == "" || age == "" || country == "") {
            alert("Please Fill the Field");
        } else {
            $.ajax({
                url: "/add-student",
                type: "POST",
                data: {
                    username: username,
                    age: age,
                    country: country,
                    _token: _token
                },
                success: (data) => {
                    if (data == 1) {
                        alert("Add Successfully");
                        $("#addStudent").modal("hide");
                        $("#student").trigger("reset");
                        getData();
                        total();

                    } else {
                        alert("Something Woring");
                    }
                }
            })
        }
    })

    $(document).on("click", "#edit-student", function () {
        const id = $(this).data("id");
        $.ajax({
            url: "/edit-student",
            type: "GET",
            data: { id: id },
            success: (data) => {
                $("#edit-data").html(data)
            }
        })
    })

    $("#update").on("click", function () {
        const id = $("#id").val();
        const username = $("#edit_username").val();
        const age = $("#edit_age").val();
        const country = $("#edit_country").val();
        const _token = $("#_token").val();

        if (username == "" || age == "" || country == "") {
            alert("Please Fill the Field");
        } else {
            $.ajax({
                url: "/update-student",
                type: "POST",
                data: {
                    id: id,
                    username: username,
                    age: age,
                    country: country,
                    _token: _token
                },
                success: (data) => {
                    if (data == 1) {
                        alert("Update Successfully");
                        $("#editStudent").modal("hide");
                        $("#udpate-student").trigger("reset");
                        getData();
                    } else {
                        alert("Something Woring");
                    }
                }
            })
        }
    });

    $(document).on("click", "#delete-student", function () {
        if (confirm("Are you Sure you want to delete")) {
            const id = $(this).data("id");
            $.ajax({
                url: "/delete",
                type: "GET",
                data: { id: id },
                success: (data) => {
                    if (data == 1) {
                        alert("delete Successfully");
                        getData();
                        total();

                    } else {
                        alert("something woring");

                    }
                }
            })
        }
    })
})