const dropdowns = document.querySelectorAll('.dropdown');
        console.log(dropdowns);
        
        for(let i = 0; i < dropdowns.length; i++) {
            
            dropdowns[i].addEventListener('click', function(e) {
                
                //for(let x = 0; i < dropdowns.length; x++) {
                  //  dropdowns[x].querySelector('.dropdown-content').classList.add('hide');
                //}
                e.currentTarget.querySelector('.dropdown-content').classList.toggle('hide');
            });
        }
