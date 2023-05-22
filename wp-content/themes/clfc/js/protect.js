document.addEventListener('DOMContentLoaded', function() {
    var postContainer = document.getElementById('post-container-protect');
    var categoryId = 5; // Category ID of the desired category
    var currentPage = 1; // Initial page number
    var viewMoreTrigger = document.getElementById('view-more-trigger-protect');
    var totalPosts = 0; // Total number of posts
    var currentRow = null; // Reference to the current row being populated
  
    // Function to fetch the featured image URL for a post
    function fetchFeaturedImageURL(post) {
      var featuredMediaID = post.featured_media;
  
      if (featuredMediaID && featuredMediaID !== 0) {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/wp-json/wp/v2/media/' + featuredMediaID, true);
  
        xhr.onload = function() {
          if (xhr.status === 200) {
            var media = JSON.parse(xhr.responseText);
            if (media.source_url) {
              // Render the post with the featured image
              renderPostWithImage(post, media.source_url);
            }
          }
        };
  
        xhr.send();
      } else {
        // Render the post without the featured image
        renderPostWithImage(post, null);
      }
    }
  
    // Function to render a post with or without the featured image
    function renderPostWithImage(post, imageUrl) {
      if (currentRow === null || currentRow.childElementCount === 3) {
        currentRow = document.createElement('div');
        currentRow.classList.add('row');
        postContainer.appendChild(currentRow);
      }
  
      var col = document.createElement('div');
      col.classList.add('col-md-4', 'col-sm-12');
  
      // Create the post item
      var postItem = document.createElement('div');
      postItem.classList.add('post-item');
  
      // Display the featured image
      if (imageUrl) {
        var featuredImage = document.createElement('img');
        featuredImage.src = imageUrl;
        featuredImage.alt = 'Featured Image';
        featuredImage.classList.add('img-fluid');
        postItem.appendChild(featuredImage);
      }
  
      // Display the post content
      var content = document.createElement('div');
      content.innerHTML = post.content.rendered;
      postItem.appendChild(content);
  
      col.appendChild(postItem);
      currentRow.appendChild(col);
    }
  
    // Function to fetch and display posts
    function fetchPosts(page) {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', '/wp-json/wp/v2/posts?categories=' + categoryId + '&per_page=3&page=' + page + '&order=desc', true);
  
      xhr.onload = function() {
        if (xhr.status === 200) {
          var posts = JSON.parse(xhr.responseText);
          if (posts.length > 0) {
            for (var i = 0; i < posts.length; i++) {
              var post = posts[i];
              fetchFeaturedImageURL(post);
            }
  
            // Increment the current page number
            currentPage++;
  
            // Check if there are more posts available
            if (currentPage <= Math.ceil(totalPosts / 3)) {
              viewMoreTrigger.style.display = 'block';
            } else {
              viewMoreTrigger.style.display = 'none';
            }
          } else {
            // No more posts available
            viewMoreTrigger.style.display = 'none';
          }
        }
      };
  
      xhr.send();
    }
  
    // Function to fetch the total number of posts
    function fetchTotalPosts() {
      var xhr = new XMLHttpRequest();
      xhr.open('GET', '/wp-json/wp/v2/posts?categories=' + categoryId + '&per_page=1&order=desc', true);
  
      xhr.onload = function() {
        if (xhr.status === 200) {
          var headers = xhr.getResponseHeader('X-WP-Total');
          totalPosts = parseInt(headers);
        }
      };
  
      xhr.send();
    }
  
    // Fetch the initial page of posts and the total number of posts
    fetchTotalPosts();
    fetchPosts(currentPage);
  
    // Function to load more posts on trigger click
    function loadMorePosts() {
      if (currentPage <= Math.ceil(totalPosts / 3)) {
        fetchPosts(currentPage);
      }
    }
  
    // Add "View More" trigger functionality
    viewMoreTrigger.addEventListener('click', function() {
      loadMorePosts();
    });
  });
  