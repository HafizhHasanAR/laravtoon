import React from "react";
import propsTypes from "prop-types";

PrimaryButton.propTypes = {
    type: propsTypes.oneOf(["button", "submit", "reset"]),
    className: propsTypes.string,
    variant: propsTypes.oneOf([
        "primary",
        "warning",
        "danger",
        "light-outline",
        "white-outline",
    ]),
    processing: propsTypes.bool,
    children: propsTypes.node,
};

export default function PrimaryButton({
    type = "submit",
    className = "",
    variant = "primary ",
    processing,
    children,
}) {
    return (
        <button
            type={type}
            className={`rounded-2xl py-[13px] text-center w-full ${
                processing && "opacity-30"
            } btn-${variant} ${className}`}
            disabled={processing}
        >
            {children}
        </button>
    );
}
