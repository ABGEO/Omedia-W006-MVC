function removeUser(userID) {
    if (confirm("Remove this user?")) {
        $.ajax({
            url: '/deleteUser/' + userID,
            type: "DELETE",
            success: function (response) {
                console.log(response);
                if (response == 'success')
                    alert('User has been deleted!');
            },
            error: function (response) {
                console.log(response);
            }
        });
    }
}