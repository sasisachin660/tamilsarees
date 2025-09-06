 <!-- noUiSlider CSS & JS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.7.1/nouislider.min.js"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
 <script>
     // Simple JavaScript for interactive elements
     document.addEventListener('DOMContentLoaded', function() {
         // Filter toggle
         const filterHeaders = document.querySelectorAll('.filter-group h3');
         filterHeaders.forEach(header => {
             header.addEventListener('click', function() {
                 const options = this.nextElementSibling;
                 options.style.display = options.style.display === 'none' ? 'block' : 'none';
                 const icon = this.querySelector('i');
                 icon.classList.toggle('fa-chevron-down');
                 icon.classList.toggle('fa-chevron-up');
             });
         });

         // Color option selection
         const colorOptions = document.querySelectorAll('.color-option');
         colorOptions.forEach(option => {
             option.addEventListener('click', function() {
                 colorOptions.forEach(opt => opt.classList.remove('active'));
                 this.classList.add('active');
             });
         });

         // View options toggle
         const viewOptions = document.querySelectorAll('.view-option');
         viewOptions.forEach(option => {
             option.addEventListener('click', function() {
                 viewOptions.forEach(opt => opt.classList.remove('active'));
                 this.classList.add('active');
             });
         });
     });
 </script>
 <script>
     const slider = document.getElementById('sliderPrice');
     const rangeMin = parseInt(slider.dataset.min);
     const rangeMax = parseInt(slider.dataset.max);
     const step = parseInt(slider.dataset.step);
     const filterInputs = document.querySelectorAll('input.filter__input');

     noUiSlider.create(slider, {
         start: [rangeMin, rangeMax],
         connect: true,
         step: step,
         range: {
             'min': rangeMin,
             'max': rangeMax
         },
         format: {
             to: value => Math.round(value),
             from: value => Number(value)
         }
     });

     // Update input values on slider move
     slider.noUiSlider.on('update', (values, handle) => {
         filterInputs[handle].value = values[handle];
     });

     // Update slider when inputs change
     filterInputs.forEach((input, indexInput) => {
         input.addEventListener('change', () => {
             slider.noUiSlider.setHandle(indexInput, input.value);
         });
     });
 </script>