var text = '{"employees":[' +
'{"id": "1","firstName":"John","lastName":"Doe","birthday": "1990-05-07", "gender": {"male": true, "female": false}, "knownLanguage": ["English", "Japanese", "Chinese"] },' +
'{"id": "2","firstName":"Lina","lastName":"Art","birthday": "1994-08-05", "gender": {"male": false, "female": true}, "knownLanguage": ["English", "Japanese"] }]}';

obj = JSON.parse(text);

function myFunction() {
    document.getElementById('fname').value = obj.employees[1].firstName;
    document.getElementById('lname').value = obj.employees[1].lastName;
    document.getElementById('bday').value = obj.employees[1].birthday;
    if(obj.employees[1].gender.male == true) {
        document.getElementById('gender').value = 'Male';
    } else {
        document.getElementById('gender').value = 'Female';
    }
    document.getElementById('language').value = obj.employees[1].knownLanguage;
}