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