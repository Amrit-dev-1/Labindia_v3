// Tab Section Button


function showSection(sectionNumber) {
  console.log("Section to show:", sectionNumber);

  // Fade out all sections
  gsap.to(".news-section", {
    opacity: 0,
    duration: 0.3,
    onComplete: () => {
      console.log("Fade out complete");

      // Hide all sections after animation completes
      document.querySelectorAll(".news-section").forEach((section) => {
        section.style.display = "none";
      });

      // Show the selected section
      const selectedSection = document.getElementById(`section-${sectionNumber}`);
      selectedSection.style.display = "block";
      console.log("Displaying section:", selectedSection);

      // Fade in the selected section with animation
      gsap.to(selectedSection, {
        opacity: 1,
        duration: 0.3,
      });
    },
  });

  // Update title and description based on section
  switch (sectionNumber) {
    case 1:
      document.getElementById("section-title").textContent = "Blogs";
      document.getElementById("section-description").textContent = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
      break;
    case 2:
      document.getElementById("section-title").textContent = "Resources";
      document.getElementById("section-description").textContent = "Description for Resources section Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
      break;
    case 3:
      document.getElementById("section-title").textContent = "Learn More";
      document.getElementById("section-description").textContent = "Description for Learn More section Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy";
      break;
    default:
      break;
  }

  // Update active state of tabs
  document.querySelectorAll(".tab-button").forEach((tab) => {
    tab.classList.remove("active");
  });
  document.getElementById(`tab-${sectionNumber}`).classList.add("active");
  console.log("Active tab updated:", `tab-${sectionNumber}`);
}

// Ensure the first tab and section are shown when the page loads
document.addEventListener('DOMContentLoaded', () => {
  showSection(1); // Show the first section by default
});

document.addEventListener('DOMContentLoaded', function () {
  const products = {
    1: 'Details for product 1',
    2: 'Details for product 2',
    3: 'Details for product 3',
    // Add more product details as needed
  };

  const knowMoreButtons = document.querySelectorAll('.know-more-btn');
  const sidebar = document.getElementById('sidebar');
  const closeBtn = document.getElementById('close-btn');
  const sidebarContent = document.getElementById('sidebar-content');
  const swiperContainer = document.querySelector('.carousel-container');

  knowMoreButtons.forEach(button => {
    button.addEventListener('click', function () {
      const productId = this.getAttribute('data-product-id');
      sidebarContent.innerHTML = products[productId] || 'No details available';
      sidebar.style.display = 'block';
      setTimeout(() => {
        sidebar.classList.add('open');
        swiperContainer.classList.add('reduced-width');
      }, 10);
    });
  });


  closeBtn.addEventListener('click', function () {
    sidebar.classList.remove('open');
    swiperContainer.classList.remove('reduced-width');
    setTimeout(() => {
      sidebar.style.display = 'none';
    }, 300); // Match the transition duration
  });
});





// Initialize animations
//  createScrollAnimations();
function openTab(event, tabName) {
  // Get all elements with class="tab-content" and hide them
  var i, tabContent, tabButtons;
  tabContent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
    tabContent[i].classList.remove("active");
  }

  // Get all elements with class="tab-button" and remove the class "active"
  tabButtons = document.getElementsByClassName("tab-button-2");
  for (i = 0; i < tabButtons.length; i++) {
    tabButtons[i].classList.remove("active");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  document.getElementById(tabName).classList.add("active");
  event.currentTarget.classList.add("active");
}

// Function to simulate a click on the first tab button when the page loads
window.onload = function () {
  document.getElementById("defaultTab").click();
}

// Set initial state
// document.getElementById('domestic').style.display = 'block';