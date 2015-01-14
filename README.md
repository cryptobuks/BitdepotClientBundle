CoineggerClientBundle - Work In Progress
========================

When bitcoin meet Arnold Schwarzenegger.

See the [API Project](https://github.com/dizda/coinegger).

## Setup

Install with Composer

    composer require dizda/coinegger-client-bundle

## Configuration

To active hooks, you must update your `routing.yml`:

    dizda_coinegger_client:
        resource: "@DizdaCoineggerClientBundle/Resources/config/routing.yml"
        prefix:   /callback

Add this to your `config.yml`:

    dizda_coinegger_client:
        base_url:   %coinegger_endpoint%    # Correspond to the coinegger api server
        app_id:     %coinegger_app_id%
        app_secret: %coinegger_app_secret%

## License

MIT Licensed, see LICENSE.

