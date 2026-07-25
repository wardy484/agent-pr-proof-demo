<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ShipLog</title>
    <style>
        :root {
            color-scheme: dark;
            font-family: Inter, ui-sans-serif, system-ui, sans-serif;
            background: #08111f;
            color: #e5eefb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(circle at top left, rgb(28 90 126 / 35%), transparent 36rem),
                #08111f;
        }

        main {
            width: min(70rem, calc(100% - 2rem));
            margin: 0 auto;
            padding: 5rem 0;
        }

        .eyebrow {
            margin: 0 0 0.75rem;
            color: #65d6c2;
            font-size: 0.8rem;
            font-weight: 800;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        h1 {
            max-width: 42rem;
            margin: 0;
            font-size: clamp(2.5rem, 8vw, 5.5rem);
            line-height: 0.95;
            letter-spacing: -0.06em;
        }

        .intro {
            max-width: 40rem;
            margin: 1.5rem 0 3rem;
            color: #9aabc1;
            font-size: 1.1rem;
            line-height: 1.7;
        }

        .release-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
            gap: 1rem;
        }

        article {
            min-height: 15rem;
            padding: 1.4rem;
            border: 1px solid #21334a;
            border-radius: 1rem;
            background: rgb(13 28 47 / 86%);
            box-shadow: 0 1rem 3rem rgb(0 0 0 / 18%);
        }

        .status {
            display: inline-flex;
            padding: 0.4rem 0.65rem;
            border-radius: 999px;
            background: #153447;
            color: #8be6d5;
            font-size: 0.75rem;
            font-weight: 800;
            text-transform: uppercase;
        }

        h2 {
            margin: 2.5rem 0 0.75rem;
            font-size: 1.35rem;
        }

        article p {
            margin: 0;
            color: #9aabc1;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <main>
        <p class="eyebrow">ShipLog release board</p>
        <h1>Know what is shipping next.</h1>
        <p class="intro">
            A deliberately small Laravel application used to demonstrate a
            ticket-to-PR workflow with Codex.
        </p>

        <section class="release-grid" aria-label="Product releases">
            @foreach ($releases as $release)
                <article>
                    <span class="status">{{ $release['status'] }}</span>
                    <h2>{{ $release['title'] }}</h2>
                    <p>{{ $release['summary'] }}</p>
                </article>
            @endforeach
        </section>
    </main>
</body>
</html>
