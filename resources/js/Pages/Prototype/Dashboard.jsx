import Authenticated from "@/Layouts/Authenticated/Index";
import Flickity from "react-flickity-component";
import { Head, Link } from "@inertiajs/inertia-react";
import FeaturedMovie from "@/Components/FeaturedMovie";

export default function Dashboard() {
    const flickityOptions = {
        cellAlign: "left",
        contain: true,
        groupCells: 1,
        wrapAround: false,
        pageDots: false,
        prevNextButtons: false,
        draggable: ">1",
    };

    return (
        <Authenticated>
            <Head>
                <Link
                    rel="stylesheat"
                    href="https://unpkg.com/flickity@2/dist/flickity.min.css"
                />
            </Head>
            <div>
                <div>
                    <div className="font-semibold text-[22px] text-black mb-4">
                        Featured Movies
                    </div>
                    <Flickity
                        className="gap-[30px] __scroll-selector"
                        options={flickityOptions}
                    >
                        {[1, 2, 3, 4].map((i) => (
                            <FeaturedMovie
                                key={i}
                                slug="the-batman-in-love"
                                name={`The Batman in Love ${i}`}
                                category="Comedy/Action"
                                thumbnail="https://picsum.photos/id/1/300/300"
                                rating={i + 13}
                            />
                        ))}
                    </Flickity>
                </div>
            </div>
            ;
        </Authenticated>
    );
}
