
$(document).ready(function(){
const country = $('#countryCode');
const regions = $('.region');
const regionOther = $('.region[data-country=OTHER]');
const selectedRegion = $('#selectedRegion');
country.on('change', function() {
  let activeRegion = $(`.region[data-country=${country.val()}]`);
  if(!activeRegion.length) {
  	activeRegion = regionOther;
  }
  
  regions.removeClass('active');
  activeRegion.addClass('active');
  
  updateSelectedRegion();
})

regions.on('change', updateSelectedRegion);

function updateSelectedRegion() {
  let activeRegion = $('.region.active select, .region.active input');
  selectedRegion.val(activeRegion.val());
}
});

class Validate {
  constructor(pattern,value){
      this.pattern = pattern;
      this.value = value;
  }
  valid() {
    if(this.value.match(this.pattern) === null){
      return this.value.trim();
    }
      return false;
  }
  caps() {
    return this.value.trim().toUpperCase();
  }
}
