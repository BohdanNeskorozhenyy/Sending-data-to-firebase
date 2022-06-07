<script type="module">
 
  document.addEventListener('submit', (e) => { 
      e.preventDefault()
      const FORM = e.srcElement
      const INPUTS = FORM.querySelectorAll('input')
      let data = {
          name: "",
          phone: "",
          email: ""
      }
      const date = new Date() + ""
      INPUTS.forEach(input => {
          if(input.name === 'name'){
            data = {
                ...data, 
                name: input.value 
            }
          } else if (input.name === 'phone') {
            data = {
                ...data, 
                phone: input.value,
            }
          } else if (input.name === 'email') {
            data = {
                ...data, 
                email: input.value,
            }
          }
      })
      fetch('https://us-central1-affilate-b6d3b.cloudfunctions.net/saveLead',{
      method: "POST",
      body: JSON.stringify(data),
      headers:{
         "content-type":"application/json"
      }
    });
      
      setTimeout(()=> {
        FORM.submit()
      }, 1000)
  })
</script>