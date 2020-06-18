(function(){
    const client = algoliasearch('6FNIEOSFBK', '8ae7eeb090677742089afe5269f04b9a');
    const products = client.initIndex('products');
    
    autocomplete(
      '#aa-search-input',
      {hint: true},{
          source: autocomplete.sources.hits(products, {hitsPerPage: 5}),
          displayKey: 'name',
          templates: {
            header: '<div class="aa-suggestions-category">products</div>',
            suggestion({_highlightResult}) {
              return `
                <div class="algolia-result">
                  
                  <span class="algolia-result-name">
                  <img src="${window.location.origin}/storage/${_highlightResult.image.value.replace(/(<([^>]+)>)/ig,"")}" alt="img" class="algolia-thumb">
                  ${_highlightResult.name.value.toUpperCase()}
                  </span>
                  <span>$ ${_highlightResult.price.value}</span>
                </div>
                <div class="algolia-details">
                  <span>${_highlightResult.details.value}</span>
                </div>
              `;

              // return `<span>${_highlightResult.name.value}</span><span>$ ${_highlightResult.price.value}</span>`;
            },
            empty: `<div class="aa-empty">No matching products</div>`,
          },
        }
      
    ).on('autocomplete:selected', function(event, suggestion, dataset){
      // console.log(suggestion);
      window.location.href = window.location.origin + '/shop/' + suggestion.slug;

    });
    

})();
