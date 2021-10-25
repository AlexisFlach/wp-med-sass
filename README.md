#### SASS WP

https://laravel-mix.com/docs/6.0/installation

Vad vi strävar efter:

- Clean
- Modular
- Reusable
- Ready for growth

När det kommer till att namnge klasser, ska vår layout, med HTML och CSS, ha en konsekvent struktur genom hela applikationen . Vi bör även ha en arkitektur kring CSS med filer och mappar. 

###### Component-Driven Design

- **Modular building blocks** 
- **Återanvändbara** både i samma projekt, som i andra projekt.
- Självständiga, vilket gör att de kan användas överallt i projektet.

###### BEM

- Block Element Modifier

  **Block**

  ```
  <section class="about">
    <div class="about__hero">
      <h1 class="about__title">
        <p class="about_description"></p>
      </h1>
    </div>
  </section>
  ```

  about är **Blocket**. 

  ```
  <div class="about__hero">
      <h1 class="about__title">
        <p class="about_description"></p>
      </h1>
  </div>
  ```

  Övriga är **Element**.

  **Modifier**

  ```
   <a class="about__btn btn btn--round">Get learnt</a>
  ```

  ###### Arkitetektur

  7-1 Pattern

  Sju olika mappar med partial Sass-filer, och en main SASS-fil som importerar in alltsammans.

  ```
  base
  components
  layout
  pages
  themes
  abstracts
  vendors
  ```

  

#### Sass

**Variables**

```
$primary-color: #16301d;

.about {
  background: $primary-color;
}
```

###### Nesting

```
$primary-color: #16301d;
$title-color: rgb(247, 244, 244);

.about {
  background: $primary-color;
  height: 60vh;

  &__title {
    color: $title-color;
  }
} 
```

```
.about {
  background: $primary-color;
  height: 60vh;

  #{&}__title {
    color: $title-color;
  
    &:hover {
      color: $accent-color;
    }
  }
} 
```

###### Partials

**partials/_resets.scss**

```
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
```

```
@import './partials/resets';
```

**functions**

```
@function weight($weight-name) {
  @return map-get($font-weights, $weight-name )
}
```

**mixins**

```
@mixin absCenter {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
```

```
 @include absCenter;
```











