document.addEventListener('DOMContentLoaded',
function() {
    fetch('fetch_students.php')
    .then(response => response.json())
    .then(data => {
        const tableBody = document.getElementById
        ('studentTable');
        data.forEach(student =>{
            const row = document.createById('tr');
            row.innerHTML = `
            <td>${student.fullname}</td>
            <td>${student.gender}</td>
            <td>${student.age}</td>
            <td>${student.class_id == 1 ?
                'LEVEL 4 SOD' : 'LEVEL 4 ACC'}
                </td>
                `;
                tableBody.appendChild(row);
            });
        })
        .catch(error =>
            console.error('Error fetching students: ', error));
        });