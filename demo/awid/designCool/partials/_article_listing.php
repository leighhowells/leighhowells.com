
{{ entries:listing folder="{fold}" limit="12" taxonomy="{tax}" }}
{{ if no_results }}
<p>Sorry there are no entries to display at this time.</p>{{ else }}
{{ if first }}


<ul class="articleList">{{ endif }}

  <div class="col-1-3">
  <li class="articleList_item">

    <article class="article">
      <h3><a href="{{ url }}">{{ title }}</a></h3>{{ if author || date || categories_list || tags_list }}
      <div class="article_meta">
        {{ if author|not_empty }}
        {{ member:profile member="{author}" }}
        <p class="article_author">Posted by: {{ first_name }} {{ last_name }}</p>{{ /member:profile }}
        {{ endif }}
        {{ if date }}
        <p class="article_date">Posted on:
          <time datetime="{{ datestamp format=" y-m-d="" }}="">{{ date }}</time>
        </p>{{ endif }}
        {{ if categories_list && tags_list }}
        <p class="article__tax"><b>Category:</b>{{ categories_url_list }} |<b>Tagged:</b>{{ tags_url_list }}</p>{{ endif }}
        {{ if categories_list && !tags_list }}
        <p class="article__tax"><b>Category:</b>{{ categories_url_list }}</p>{{ endif }}
        {{ if !categories_list && tags_list }}
        <p class="article__tax"><b>Tagged:</b>{{ tags_url_list }}</p>{{ endif }}
      </div>
      <!-- END .article__meta-->{{ endif }}
      {{ if main_img|not_empty }}<img src="{{ transform      src=" {main_img}="" width="180" height="120" action="smart" quality="100" }}="" alt="" class="article__img"/>{{ endif }}
      {{ summary|smartypants|markdown }}

    </article>

    </div>

  </li>{{ if last }}
</ul>{{ endif }}


{{ endif }}
{{ /entries:listing }}
{{# Add simple pagination: limit must equal entries limit #}}
{{ entries:pagination
folder="{fold}"
limit="{lim}"
taxonomy="{tax}"
}}
{{ if total_pages > 1 }}
<div class="pagination">{{ if previous_page }}<a href="{{ previous_page }}" class="pagination__prev">← Prev</a>{{ endif }}<span class="pagination__number">Page {{ current_page }} of {{ total_pages }}</span>{{ if next_page }}<a href="{{ next_page }}" class="pagination__next">Next →</a>{{ endif }}</div>
<!-- END .pagination-->{{ endif }}
{{ /entries:pagination }}



{{#
==============================poo======
NOTES
====================================
This partial displays an article listing. The partials are designed so that you can use them modularly in your templates. The variables which are used in the entries listing tag are set in the template which calls the partial e.g. look in the default template you will see three variables: fold, lim, and tax. It is here where you set those values to whichever folder name the articles are reading from e.g. blog, the number of articles to display (lim) and whether you are displaying taxonomies or not.
The images are using the transform tag which caches images, for this to work you need to set up a cache folder in your assets/img directory with the writeable permissions. You then need to set this as your default location in your settings file: _transform_destination: assets/img/cache/
For more information on partials see http://statamic.com/learn/theming/partials.
#}}