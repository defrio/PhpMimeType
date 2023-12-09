# Changelog

## v2.0.1

- Add support only PHP >=8.1
- Add support for Symfony 7.0
- Drop support by older PHP versions

## v2.0.0

### Added
- **Symfony** Response support.
- SplFileInfo and SplFileObject support.
- Multiple files can be "PhpMimeTyped".
- All classes moved to namespace **Defr\\PhpMimeType** instead of **Defr**.
- Minimal PHP version is 5.6.

### Deprecated
- Defr\\MimeType class, use Defr\\PhpMimeType\\MimeType.

### Fixed
- Files without extension can be passed too.

### Removed
- Old namespace **Defr**.

### Security
- Nothing

### v2.0.3

- Added FontAwesome support.
- Added a lot of mime types.

## v1.0

- Initial version.

### v1.0.1

- Now using Semver versioning (thanks to @gisostallenberg).