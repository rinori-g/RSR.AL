// Contents Control ===================

const companiesBtn = document.getElementById('companiesBtn');
const newsBtn = document.getElementById('newsBtn');
const productsBtn = document.getElementById('productsBtn');

const companiesContent = document.getElementById('companies');
const newsContent = document.getElementById('news');
const productsContent = document.getElementById('products');

window.addEventListener('DOMContentLoaded' , function(){
    companiesContent.style.display = "none";
    newsContent.style.display = "none";
    productsContent.style.display = "none";
    companiesForm.style.display = "none";
    newsForm.style.display = "none";
    productsForm.style.display = "none";
});

function dashboardContent(button , content){
    button.addEventListener('click', function(){
        companiesForm.style.display = "none";
        newsForm.style.display = "none";
        productsForm.style.display = "none";
        companiesContent.style.display = "none";
        newsContent.style.display = "none";
        productsContent.style.display = "none";
        content.style.display = "block";
    });
}

dashboardContent(companiesBtn , companiesContent);
dashboardContent(newsBtn , newsContent);
dashboardContent(productsBtn , productsContent);

// End of Contents Control ===================

// ======================================================================================

// Forms Control ===================

const companiesFormBtn = document.getElementById('companies-btn');
const newsFormBtn = document.getElementById('news-btn');
const productsFormBtn = document.getElementById('products-btn');

const companiesForm = document.getElementById('companies-form');
const newsForm = document.getElementById('news-form');
const productsForm = document.getElementById('products-form');

function toggleForm(button , content){
    button.addEventListener('click', function(){
        if(content.style.display == "block"){
            content.style.display = "none";   
        }
        else{
            content.style.display = "block";
        }
    });
}

toggleForm(companiesFormBtn , companiesForm);
toggleForm(newsFormBtn , newsForm);
toggleForm(productsFormBtn , productsForm);
// End of Forms Control ===================