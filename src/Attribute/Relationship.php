<?php

declare(strict_types=1);

namespace Drupal\ctools\Attribute;

use Drupal\Component\Plugin\Attribute\Plugin;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Defines a Relationship plugin attribute object.
 *
 * @see \Drupal\ctools\Plugin\RelationshipManager
 * @see plugin_api
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
class Relationship extends Plugin {

  /**
   * Constructs a Relationship attribute.
   *
   * @param string $id
   *   The plugin ID.
   * @param \Drupal\Core\StringTranslation\TranslatableMarkup $label
   *   The label of the plugin.
   * @param string|null $data_type
   *   (optional) The returned data type of this relationship.
   * @param string|null $property_name
   *   (optional) The name of the property from which this relationship is
   *   derived.
   * @param array $context
   *   (optional) The array of contexts required or optional for this plugin.
   * @param class-string|null $deriver
   *   (optional) The deriver class.
   */
  public function __construct(
    public readonly string $id,
    public readonly TranslatableMarkup $label,
    public readonly ?string $data_type = NULL,
    public readonly ?string $property_name = NULL,
    public readonly array $context = [],
    public readonly ?string $deriver = NULL,
  ) {}

}
