fetch('../public/byer.txt')
      .then(response => response.text())
      .then(data => {
        // Split the text into an array of options
        const options = data.split('\n');

        // Get the select element
        const select = document.getElementById('fSted');

        // Populate the select element with options
        options.forEach(option => {
          const optionElement = document.createElement('option');
          optionElement.value = select.value;
          optionElement.value = option.trim(); // Trim whitespace
          optionElement.textContent = option.trim(); // Trim whitespace
          select.appendChild(optionElement);
        });

        // Set the existing value if it exists
        const existingValue = "<?php echo $data['fSted']; ?>";
        if (existingValue) {
          select.value = existingValue;
        }
      })
      .catch(error => console.error('Error fetching birthplaces:', error));