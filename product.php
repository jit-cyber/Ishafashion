<style>
   .tab-container ul.tab-list {
        display: flex;
        justify-content: center;
        gap: 50px;
        padding: 0;
        list-style: none;
        margin:auto;
        width:fit-content;
        position: relative;
    }
    .tab-container ul.tab-list li{
        padding: 10px 0px;
    text-align: center;
    background: grey;
    width: 100px;
}

    .tab-container .tab-content .product-container .pro-item img{
        width:100%;
    }
    .tab-container .tab-content .product-container .pro-item .card{
        overflow:hidden;
        border-radius:10px;
    }
    .item-detail-wrap{
        position: absolute;
        top: 100%;
        right: 0;
        padding: 5px 20px;
        background: #fff;
        left: 0;
        /* display: flex; */
        transition: all 1s ease-in-out;
        color: #000;
        opacity:0;
        /* z-index: 999999999999999999; */
    }
    .item-detail-wrap p{
        margin:0;
    }
    .tab-container .tab-content .product-container .pro-item .card:hover .item-detail-wrap{
        /* position: relative;
         */
         /* bottom:0; */
         top:0%;
         opacity: 1;
         box-shadow: 0px 5px 10px 2px grey;
         /* transform:translateY(-100%) */
    }
    .tab-container .tab-content .product-container .pro-item .m-block-gap{
        margin-block: calc(var(--bs-gutter-x)* .5);
   
    }
    .tab-container ul.tab-list:before{
        content: '';
    width: 100px;
    height: 10px;
    background: red;
    position: absolute;
    left: 0;
    }
    .product-container .pro-item .card .overlay{
    background-image: linear-gradient(#efefef00, #000000a6), linear-gradient(#00000000, #00000000);
    background-size: 100% 100%, 100% 0%;
    background-repeat: no-repeat;
    background-position: left top, right bottom;
    background-color: transparent;
    transition: all 1s ease-in-out;
    height: 100%;
    }
    .product-container .pro-item .card:hover .overlay{
        
        background-size: 100% 0%, 100% 100%;
    }
</style>
<section class="banner-section">
    <div class="container-fluid product-bnr banner-bg  bnr-height">
            
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="container">
            <div class="tab-container">
                <ul class="tab-list">
                    <li class="tab-item active" data-tab="tab1">Belt</li>
                    <li class="tab-item" data-tab="tab2">Bag</li>
                    <li class="tab-item" data-tab="tab3">Garment</li>
                </ul>
                <div class="tab-content">
                    <div id="tab1" class="tab-pane active">
                        <div class="container product-container ">
                        <div class="row pro-item" id="image-gallery">
        <!-- Placeholder for dynamically inserted images -->
    </div>
                    </div>
                    <div id="tab2" class="tab-pane">
                        <div class="container product-container ">
                            <div class="row pro-item">
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag0.webp" alt="">
                                            <div class="item-detail-wrap">
                                                <div class="item-title">
                                                    <h5>
                                                        Item Name
                                                    </h5>
                                                    <p>Item code</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag1.webp" alt="">
                                            <div class="item-detail-wrap">
                                                <div class="item-title">
                                                    <h5>
                                                        Item Name
                                                    </h5>
                                                    <p>Item code</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag2.webp" alt="">
                                            <div class="item-detail-wrap">
                                                <div class="item-title">
                                                    <h5>
                                                        Item Name
                                                    </h5>
                                                    <p>Item code</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag3.webp" alt="">
                                            <div class="item-detail-wrap">
                                                <div class="item-title">
                                                    <h5>
                                                        Item Name
                                                    </h5>
                                                    <p>Item code</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 m-block-gap">
                                    <div class="card">
                                        <div class="card-in-wrap">
                                            <div class="overlay"></div>
                                            <img src="image/bag/bag4.webp" alt="">
                                            <div class="item-detail-wrap">
                                                <div class="item-title">
                                                    <h5>
                                                        Item Name
                                                    </h5>
                                                    <p>Item code</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab3" class="tab-pane">
                        <h2>Content for Tab 3</h2>
                        <p>This is the content for the third tab.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- <script>


const items = [
            { imageSrc: 'image/belt/belt0.webp', imageAlt: 'Belt Item 0', name: 'Item Name 0', code: 'Item code 0' },
            { imageSrc: 'image/belt/belt1.webp', imageAlt: 'Belt Item 1', name: 'Item Name 1', code: 'Item code 1' },
            { imageSrc: 'image/belt/belt2.webp', imageAlt: 'Belt Item 2', name: 'Item Name 2', code: 'Item code 2' },
            { imageSrc: 'image/belt/belt3.webp', imageAlt: 'Belt Item 3', name: 'Item Name 3', code: 'Item code 3' },
            { imageSrc: 'image/belt/belt4.webp', imageAlt: 'Belt Item 4', name: 'Item Name 4', code: 'Item code 4' }
        ];

        // Function to insert images and details
        function insertImages() {
            const imgElements = document.querySelectorAll('.dynamic-img');
            const nameElements = document.querySelectorAll('.dynamic-name');
            const codeElements = document.querySelectorAll('.dynamic-code');

            items.forEach((item, index) => {
                if (imgElements[index]) {
                    imgElements[index].src = item.imageSrc;
                    imgElements[index].alt = item.imageAlt;
                }
                if (nameElements[index]) {
                    nameElements[index].textContent = item.name;
                }
                if (codeElements[index]) {
                    codeElements[index].textContent = item.code;
                }
            });
        }

        // Call the function to insert images and details
        insertImages(); 
    document.addEventListener('DOMContentLoaded', function () {
    const tabItems = document.querySelectorAll('.tab-item');
    const tabPanes = document.querySelectorAll('.tab-pane');

    tabItems.forEach(tab => {
        tab.addEventListener('click', function () {
            // Remove active class from all tabs
            tabItems.forEach(item => item.classList.remove('active'));
            // Add active class to clicked tab
            this.classList.add('active');

            // Hide all tab panes
            tabPanes.forEach(pane => pane.classList.remove('active'));
            // Show the clicked tab pane
            const activePane = document.getElementById(this.getAttribute('data-tab'));
            activePane.classList.add('active');
        });
    });
});

</script> -->


 

    <script>
        // Function to fetch image data and populate the gallery
        async function populateGallery() {
            try {
                const response = await fetch('list-images.php');
                const items = await response.json();
                
                const galleryContainer = document.getElementById('image-gallery');

                items.forEach(item => {
                    // Create new elements for each item
                    const colDiv = document.createElement('div');
                    colDiv.classList.add('col-md-3', 'm-block-gap');

                    const cardDiv = document.createElement('div');
                    cardDiv.classList.add('card');

                    const cardInWrapDiv = document.createElement('div');
                    cardInWrapDiv.classList.add('card-in-wrap');

                    const overlayDiv = document.createElement('div');
                    overlayDiv.classList.add('overlay');

                    const img = document.createElement('img');
                    img.classList.add('dynamic-img');
                    img.src = item.imageSrc;
                    img.alt = item.imageAlt;

                    const itemDetailWrapDiv = document.createElement('div');
                    itemDetailWrapDiv.classList.add('item-detail-wrap');

                    const itemTitleDiv = document.createElement('div');
                    itemTitleDiv.classList.add('item-title');

                    const itemName = document.createElement('h5');
                    itemName.classList.add('dynamic-name');
                    itemName.textContent = item.name;

                    const itemCode = document.createElement('p');
                    itemCode.classList.add('dynamic-code');
                    itemCode.textContent = item.code;

                    // Assemble the elements
                    itemTitleDiv.appendChild(itemName);
                    itemTitleDiv.appendChild(itemCode);

                    itemDetailWrapDiv.appendChild(itemTitleDiv);

                    cardInWrapDiv.appendChild(overlayDiv);
                    cardInWrapDiv.appendChild(img);
                    cardInWrapDiv.appendChild(itemDetailWrapDiv);

                    cardDiv.appendChild(cardInWrapDiv);

                    colDiv.appendChild(cardDiv);

                    // Append the new column to the gallery container
                    galleryContainer.appendChild(colDiv);
                });
            } catch (error) {
                console.error('Error fetching image data:', error);
            }
        }

        // Call the function to populate the gallery
        populateGallery();
    </script>

