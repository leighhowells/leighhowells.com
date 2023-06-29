
<article class="article article-full">

  <header class="article_header">{{ if alt_title }}
    <h2 class="article_heading">{{ alt_title }}</h2>{{ else }}
    <h2 class="article_heading">{{ title }}</h2>{{ endif }}
    {{ if author || date || categories_list || tags_list }}
    <div class="article_meta">
      {{ if author|not_empty }}
      {{ member:profile member="{author}" }}
      <p class="article_author">Article Posted: {{ first_name }} {{ last_name }}</p>{{ /member:profile }}
      {{ endif }}
      {{ if date }}
      <p class="article_date">Article Posted on:
        <time datetime="{{ datestamp format=" y-m-d="" }}="">{{ date }}</time>
      </p>{{ endif }}
      {{ if link }}
      <p class="article_link">
        <iframe width="100%" height="166" frameborder="0" src="{{ link }}"></iframe>
      </p>{{ endif }}
    </div>
    <!-- END .article__meta-->{{ endif }}
  </header>{{ if main_img|not_empty }}<img src="{{ transform  src=" {main_img}="" width="650" height="450" action="smart" quality="100" }}="" alt="" class="article__img"/>{{ endif }}
  <div class="article_lead">{{ summary|smartypants|markdown }}</div>
  <!-- END .lead-->
  <div class="article_main">{{ content }}</div>
  <!-- END .main-content-->
  <footer class="article_footer"><a href="/">back</a></footer>
</article>{{ if show_comments }}

<div class="comments">
  <h3>Leave Your Comments</h3>{{ disqus:comments account="{disqus_account}" }}
</div>{{ endif }}


{{#
================================poo====
NOTES
====================================
This partial displays a single article if you require a listing use the _article_listings partial. The partials are designed so that you can use them modularly in your templates.
For more information on partials see http://statamic.com/learn/theming/partials.
There is a comments section which uses Disqus, to make this work you will need to set comments to yes in the theme.yaml file and add your Disqus short name in the same file. For more information on using Disqus comments see this post: http://garethredfern.com/article/using-disqus-with-statamic.
The images are using the transform tag which caches images, for this to work you need to set up a cache folder in your assets/img directory with the writeable permissions. You then need to set this as your default location in your settings file: _transform_destination: assets/img/cache/
#}}