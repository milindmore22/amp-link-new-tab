# AMP Open all links into new tab.

Plugin just opens all the links into new tab.

## Notes

- [this](https://wordpress.org/support/topic/how-links-open-in-a-new-tab/#post-15422845) guys needs it I don't know why?

## Plugin Structure

```markdown
.

├── sanitizers
│   ├── class-sanitizer.php
└── amp-skeleton-compat.php
```
## Sanitizers

The plugin uses `amp_content_sanitizers` filter to add custom sanitizers, to add attribute to links

### Need a feature in plugin?
Feel free to create a issue and will add more examples.