
            let objects = [{"email":"sundar@gmail.com","password":"1234"},{"Email":"yogesh@gmail.com","Password":"1234"}]
            function makeTable() {
                let table = document.quertSelecter("#mytable")

                clearTable(table)

                makeUsersTable(0, table)
            }

            makeUsersTable(i, tbody){
                for(let data of obejects[i]){
                    makeTable(data.email,data.password, tbody)
                }
            }